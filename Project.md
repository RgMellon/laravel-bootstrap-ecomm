o helper auth() é a maneira mais facil
de interagir com o status do usuario
tbm pode se utilizar o facade Auth.

auth()->check() retorna true se o usuario fez login
auth()->guest() retorna true se ele não estiver feito login
auth()->user() para obter o usuario logado
auth()->id() para obter o id do usuario logado

*******************
criando politica
  Políticas são classes que organizam a lógica de autorização em torno de 
  um modelo ou recurso específico. Por exemplo, se o seu aplicativo for um blog, você poderá ter um Postmodelo e um correspondente PostPolicypara autorizar ações do usuário, como criar ou atualizar postagens.
  
  php artisan make:policy DashBoardPolicy


Registrando Políticas
Uma vez que a política existe, ela precisa ser registrada. O AuthServiceProvider incluído em novos aplicativos do Laravel contém uma policies propriedade que mapeia seus modelos do Eloquent para suas políticas correspondentes. O registro de uma política instruirá o Laravel sobre qual política utilizar ao autorizar ações contra um determinado modelo:


 Dashboard::class => DashBoardPolicy::class,

 dessa forma no AuthServiceProvider e no 
 atributo protected $polices
 uma amarração é feita, falando que o model
 Dashboard contem uma politica

 ## para usar no blade
@cannot('view',App\Dashboard::class)
  //se o usuario não tiver permissao aparece isso
@elsecannot('view')
  //caso contrario aparece isso
@endcannot

sendo view o nome da police em DashBoardPolicy
que é o mesmo nome do Model em DashBoard


_____________________________________________
Recuperando dados do form

<input type="text" name="nome" class="form-control" id="nome" value="{{ old('nome')}}" placeholder="Nome produto...">