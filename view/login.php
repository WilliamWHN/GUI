<div class="bg-modal">
    <div class="login-page">
        <div class="form">
            <div class="register-form">
                <input type="text" placeholder="name" />
                <input type="password" placeholder="password" />
                <input type="text" placeholder="email address" />
                <a onclick="closeForm()" href="#"><button>create</button></a>
                <p class="message">Already registered? <a href="#" onclick="changeForm('login')">Sign In</a></p>
            </div>
            <div class="login-form" data-target="myquests">
                <input type="text" placeholder="username" />
                <input type="password" placeholder="password" />
                <a onclick="closeForm()" href="#" ><button>login</button></a>
                <p class="message">Not registered? <a href="#" onclick="changeForm('register')">Create an account</a></p>
            </div>
        </div>
    </div>
</div>