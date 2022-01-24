<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Syariif Abd | Web Portfolio</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- nav -->
    <div class="container pt-4">
        <div class="row justify-content-between">
            <div class="col-md-11">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacts</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Profile -->
    <section class="pb-4">
        <div class="container pt-4">
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <p id="profile-hello">Hello There 👋 I’m</p>
                    <h4 id="profile-name">Syariif Abdurrahman</h4>
                    <h4 id="profile-name">Bathik</h4>
                    <hr width="144px" size="4px" id="line">
                    <p class="pt-5" id="profile-desc">I am Syariif, a 5th semester student of Information Systems at
                        Telkom University. I am passionate, committed, fast learner and reliable person.
                    </p>
                    <div class="pt-5">
                        <form action="" method="post">
                            <tr>
                                <td>
                                    <button class="btn" id="button-download-cv">Download CV</button>
                                </td>
                                <span class="ps-4"></span>
                                <td>
                                    <a class="btn" id="button-hire">Hire Me</a>
                                </td>
                            </tr>
                        </form>
                    </div>
                    <div class="pt-5 pb-5">
                        <p id="profile-social">Social</p>
                        <tr>
                            <td><a href="https://www.linkedin.com/in/syariif-abdurrahman-bathik/"><img
                                        src="images/linkedin.png" alt=""></a></td>
                        </tr>
                        <span class="ps-2"></span>
                        <tr>
                            <td><a href="https://github.com/foxxxesky"><img src="images/github.png" alt=""></a></td>
                        </tr>
                        <span class="ps-2"></span>
                        <tr>
                            <td><a href="mailto:abdurrahman1467@gmail.com"><img src="images/gmail.png" alt=""></a></td>
                        </tr>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-end">
                        <img src="images/ProfilePictures.png" alt="" class="img-fluid" width="518px" height="517px">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills -->
    <section id="background-2">
        <div class="container pt-5 pb-5">
            <h4 id="skill-title">What Can I Do?</h4>
            <hr width="119px" size="4px" id="line">
            <div class="row justify-content-between">
                <div class="col-md-6 pt-4">
                    <div class="card" id="skill-card">
                        <div class="card-body">
                            <div class="row justify-content-start">
                                <div class="col-md-2 pt-2">
                                    <img src="images/programing.png" alt="" width="76px" height="76px"
                                        class="img-fluid">
                                </div>
                                <div class="col-10">
                                    <h4 id="card-title-skill">Programing</h4>
                                    <p id="card-text-skill">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Quidem
                                        veritatis magni
                                        esse velit molestias quaerat iusto rerum? Quibusdam, eveniet amet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3">
                        <div class="card" id="skill-card">
                            <div class="card-body">
                                <div class="row justify-content-start">
                                    <div class="col-md-2 pt-2">
                                        <img src="images/uiux.png" alt="" width="76px" height="76px" class="img-fluid">
                                    </div>
                                    <div class="col-10">
                                        <h4 id="card-title-skill">UI/UX Design</h4>
                                        <p id="card-text-skill">Lorem ipsum dolor, sit amet consectetur adipisicing
                                            elit.
                                            Quidem
                                            veritatis magni
                                            esse velit molestias quaerat iusto rerum? Quibusdam, eveniet amet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3">
                        <div class="card" id="skill-card">
                            <div class="card-body">
                                <div class="row justify-content-start">
                                    <div class="col-md-2 pt-2">
                                        <img src="images/data.svg" alt="" width="76px" height="76px" class="img-fluid">
                                    </div>
                                    <div class="col-10">
                                        <h4 id="card-title-skill">Data Analysis</h4>
                                        <p id="card-text-skill">Lorem ipsum dolor, sit amet consectetur adipisicing
                                            elit.
                                            Quidem
                                            veritatis magni
                                            esse velit molestias quaerat iusto rerum? Quibusdam, eveniet amet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    One of two columns
                </div>
            </div>
        </div>
    </section>

    <section>
        <img src="images/wave.png" class="img-fluid" alt="" id="wave">
    </section>

</body>

</html>