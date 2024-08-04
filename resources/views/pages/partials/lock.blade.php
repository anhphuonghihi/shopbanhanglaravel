<div class="overlay-container" id="lock">
    <div class="overlay" tabindex="-1" data-url="https://xcheckerviet.biz/login/" role="dialog" aria-hidden="false">
        <div class="overlay-title">Tài khoản của bạn đã bị khóa</div>
        <?php
        
        $message = Session::get('message');
        if (!empty($message)) {
            echo '<span class="text-alert">' . $message . '</span>';
            Session::put('message', null);
        }
        ?>
        <div class="overlay-content">
            <div class="blocks">

                @foreach ($errors->all() as $val)
                    <ul>
                        <li>{{ $val }}</li>
                    </ul>
                @endforeach
                <form action="{{ URL::to('/login') }}" method="post" class="block" id="loginform">
                    @csrf
                    <div class="block-container">

                    </div>

                    <div class="block-outer block-outer--after uix_login__registerLink">
                        <div class="block-outer-middle">
   
                        </div>
                    </div>



                </form>




            </div>
        </div>
    </div>
</div>
