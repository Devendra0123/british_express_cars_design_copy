<body class="main-template">
    <script>
        function handleLeadPassengerDisplay() {
            if ($("input[name='lead_passenger_check']").is(":checked")) {
                console.log("hello")
                $(".lead_passenger").css("display": "block")
            } else {
                $(".lead_passenger").css("display": "none")
            }
        }
    </script>
    <header style="/*border-top: 3px solid #EE595F;*/">

        <section class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="">
                            <a class="" href="../index.php">
                                <img src="../assets/images/logo.png" alt="logo" class="img-fluid text-center">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </header>