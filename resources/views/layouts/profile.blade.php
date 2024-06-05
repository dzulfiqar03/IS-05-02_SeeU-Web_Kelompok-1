<div class="profile position-absolute top-0 end-0  w-px-300 h-vh-100 bg-primary">
    <div class="profileBody">
        <div class="profileTitle p-px-10 bg-transparency d-flex justify-content-around">

            <div class="btnArrow mt-3">
                <button class="profileBtn bg-white px-3 rounded-circle border border-0" id="profileBtn">

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </button>
            </div>


            <h1>My Profile</h1>

        </div>

        <div class="profileSect justify-content-center align-items-center vh-100">


            <div class="imgCont m-auto">
                <img class="rounded-circle" src="" alt="" width="170" height="170">

            </div>


            <form class="col row-cols-auto gap-3 p-3 mb-3 mt-5" action="home_page.php" method="post">
                <div class="card rounded-20 name bg-black p-3 text-white">
                    <label for="name">Name:</label>
                    <input class="border border-0 cursor-pointer w-260 px-3 py-2 rounded-sm" type="text" name="customer_name" id="customers_name" value="{{ $userEmail->userName }}">
                </div>
                <div class="card rounded-20 mt-3 username bg-black p-3 text-white">
                    <label for="username">Username</label>
                    <input class="border border-0 cursor-pointer w-260 px-3 py-2 rounded-sm" type="text" name="cust_username" id="custs_username" value="{{ $userEmail->fullName }}">

                </div>

                <div class="card rounded-20 mt-3 email bg-black p-3 text-white">
                    <label for="email">Email</label>

                    <input class="border border-0 cursor-pointer w-260 px-3 py-2 rounded-sm" type="email" name="email" id="email" value="{{ $userEmail->email }}">

                </div>

            </form>

            <button class="btn btn-primary bg-dark w-100 border border-0 hover:bg-light" type="button"><a href="{{route('logout')}}">Log Out</a></button>
            <?php
            ?>
        </div>


        <style>
            .profile {
                transform: translateX(350px)
            }

            .imgCont,
            .btnArrow,
            .profileTitle h1 {
                width: max-content;
            }


            .profileSect {
                transform: scale(0.8);

            }





            .profileSect form .name,
            .profileSect form .username,
            .profileSect form .email {

            }

            .profileSect input {
                background-color: orange;
                cursor: pointer;
            }

            .profileSect input[type="submit"] {
                width: 100%;
                background-color: wheat;
            }



            .profileSect button a {
                text-decoration: none;
                color: white;
                font-weight: bold;
            }
        </style>

    </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
