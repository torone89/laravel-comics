   @php
       $links = config('main-menu');
   @endphp

   <header>
       <div class="container">
           <nav>
               <figure>

                   <img src="{{ asset('img/dc-logo.png') }}" alt="logo">

               </figure>
               <!-- LOGICA DINAMICA LISTE -->
               <ul>
                   @foreach ($links as $link)
                       <li>
                           <a href="{{ route($link['rout_name']) }}">
                               {{ $link['text'] }}</a>
                       </li>
                   @endforeach
               </ul>
           </nav>
       </div>
   </header>
