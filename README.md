# Laravel Api Template ❤️

基于最新版本的 Laravel 10.* 构建的一个**基础功能**完备，**规范统一**，能够**快速**应用于实际的 API 项目开发启动模板。同时，也希望通过**合理的**架构设计使其适用于中大型项目。

少许的依赖安装，遵循 Laravel 的思维进行扩展，不额外增加「负担」。

开箱即用，加速 Api 开发。

### 支持情况

- RESTful 规范的HTTP 响应结构：成功、失败、异常场景统一结构响应；多语言提示返回
- 更为便捷地使用枚举/常量
- Jwt-auth 方式授权
- Repository & Service」架构设计参考

### 目录结构

```
├── app
│   ├── Console
│   │   ├── Commands                  // cli command：通常用于实现轮询任务
│   │   └── Kernel.php                // Schedule 调度
│   ├── Constants                     // 常量定义
│   ├── Events                        // 事件处理
│   │   ├── Event.php
│   │   └── ExampleEvent.php
│   ├── Exceptions                    // 异常处理：结合 jiannei/laravel-response，可以更方便处理异常信息响应
│   │   └── Handler.php
│   ├── Http
│   │   ├── Controllers               // Controller 层根据 Request 将任务分发给不同 Service 处理，返回响应给客户端
│   │   │   ├── Controller.php
│   │   │   └── UsersController.php   // 包含 laravel-response 使用示例
│   │   ├── Middleware
│   │   │   └── Authenticate.php      // 统一401响应
│   │   └── Resources
│   │       └── UserResource.php      // 使用 API 转换资源数据
│   ├── Jobs                          // 异步任务
│   │   ├── ExampleJob.php
│   │   └── Job.php
│   ├── Listeners                     // 监听事件处理
│   │   └── ExampleListener.php
│   ├── Repositories                  // Repository 层：处理与数据相关的逻辑，调用 Model 取资源数据
│   │   ├── UserRepository.php
│   │   └──Models                  // Model 层：数据定义，以及数据之间的关联关系
│   │       └── User.php
│   ├── Providers                     // 各种服务容器
│   │   └── AppServiceProvider.php
│   ├── Services                      // Service 层：处理实际业务；调用 Model 取资源数据，分发 Job、Eevent 等
│   │   └── UserService.php
│   └── Support                       // 对框架的扩展，或者实际项目中需要封装一些与业务无关的通用功能集
│       ├── Traits
│       │   ├── Helpers.php           // Class 中常用的辅助功能集
│       └── helpers.php               // 全局会用到的辅助函数
```

## Repository & Service 模式架构

```
Controller => 校验请求后调用不同 service 进行业务处理，调用 API Resource 转换资源数据返回
Service => 具体的业务实现，调用 Model 取资源数据，处理业务，分发 event、job，
Model => 维护资源数据的定义，以及数据之间的关联关系
```

### 职责说明

**Controller 岗位职责**：

1. 校验是否有必要处理请求，是否有权限和是否请求参数合法等。无权限或不合法请求直接 response 返回格式统一的数据
2. 将校验后的参数或 Request 传入 Service 中具体的方法，安排 Service 实现具体的功能业务逻辑
3. Controller 中可以通过`__construct()`依赖注入多个 Service。比如 `UserController` 中可能会注入 `UserService`（用户相关的功能业务）和 `EmailService`（邮件相关的功能业务）
4. 使用统一的 `$this->response`调用`sucess`或`fail`方法来返回统一的数据格式
5. 使用 Laravel Api Resource 的同学可能在 Controller 中还会有转换数据的逻辑。比如，`return Response::success(new UserCollection($resource));`或`return Response::success(new UserResource($user));`

**Service 岗位职责**：

1. 实现项目中的具体**功能**业务。所以 Service 中定义的方法名，应该是用来**描述功能或业务**的（动词+业务描述）。比如`handleListPageDisplay`和`handleProfilePageDisplay`，分别对应用户列表展示和用户详情页展示的需求。
2. 处理 Controller 中传入的参数，进行**业务判断**
   3.（可选）根据业务需求配置相应的 Criteria 和 Presenter 后（不需要的可以不用配置，或者将通用的配置到 Repository 中）
4. 调用 Repository 处理**数据的逻辑**
5. Service 可以不注入 Repository，或者只注入与处理当前业务**存在数据关联**的 Repository。比如，`EmailService`中或许就只有调用第三方 API 的逻辑，不需要更新维护系统中的数据，就不需要注入 Repository；`OrderService`中实现了订单出库逻辑后，还需要生成相应的财务结算单据，就需要注入 `OrderReposoitory`和`FinancialDocumentRepository`，财务单据中的原单号关联着订单号，存在着数据关联。
6. Service 中不允许调用其他 Service，保持职责单一，如有需要，应该考虑 Controller 中调用

**Model 岗位职责**：

Model 层只需要相对简单地数据定义就可以了。比如，对数据表的定义，字段的映射，以及数据表之间关联关系等。

### 规范

* 命名规范：

- controller：
    - 类名：名词，复数形式，描述是对整个资源集合进行操作；当没有集合概念的时候。换句话说，当资源只有一个的情况下，使用单数资源名称也是可以的——即一个单一的资源。例如，如果有一个单一的总体配置资源，你可以使用一个单数名称来表示
    - 方法名：动词+名词，体现资源操作。如，store\destroy

- service:
    - 类名：名词，单数。比如`UserService`、`EmailService`和`OrderService`
    - 方法名：`动词+名词`，描述能够实现的业务需求。比如：`handleRegistration`表示实现用户注册功能。

## Packages

- [jiannei/laravel-response](https://github.com/jiannei/laravel-response)：规范统一的响应数据格式
- [tymon/jwt-auth](https://github.com/tymondesigns/jwt-auth)：JWT 认证
- [barryvdh/laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper): Laravel 辅助工具

## License

The Laravel Api Template is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
