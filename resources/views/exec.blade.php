
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
 <body>
     <form method="POST" action = "/mery">
     @csrf
          <input name ="text"/>
           <button>
               save
           </button>
     </form>

 </body>
</html>