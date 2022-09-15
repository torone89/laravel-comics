   @php
       $links = config('main_menu');
   @endphp

   <header>
       <div class="container">
           <nav class="menu-header">
               <figure class="menu-header">

                   <img src="{{ asset('images/dc-logo.png') }}" alt="logo">

               </figure>
               <!-- LOGICA DINAMICA LISTE -->
               <ul class="menu-header">
                   @foreach ($links as $link)
                       <li>
                           <a class="menu-header" href="{{ route($link['rout_name']) }}">
                               {{ $link['text'] }}</a>
                       </li>
                   @endforeach
               </ul>
           </nav>
       </div>
   </header>
