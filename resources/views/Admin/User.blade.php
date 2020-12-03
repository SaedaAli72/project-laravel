<!Doctype html>
    <head>
    <meta charset="utf-8">   
    <title>Users</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
	</head>
	
	<body>
    <div class="wrapper">
      <div class="row">
        <div class="sidebar ">
          <div class="sidebar-header text-center">
              <h1>UMS</h1>
          </div>
          <div class="sidebar-body">
            <a href="index.html" class="active"><i class="fa fa-home"></i><span class="side-plugins">home</span></a>
            <h6> Base Data</h6>
            <ul class="sidebar-body-list">
            <li><a href="/university"><i class="fa fa-arrow-right"></i><span class="side-plugins">Universities</span></a></li>
              <li><a href="/avatar"><i class="fa fa-arrow-right"></i><span class="side-plugins">Avatars</span></a></li>
              <li><a href="/college"><i class="fa fa-graduation-cap"></i><span class="side-plugins">Colloges</span></a></li>
              <li><a href="/department"><i class="fa fa-arrow-right"></i><span class="side-plugins">Departmens</span></a></li>
              <li><a href="/user"><i class="fa fa-user"></i><span class="side-plugins">Users</span></a></li>
              <li><a href="/subject"><i class="fa fa-arrow-right"></i><span class="side-plugins">Subjects</span></a></li>
              <li><a href="/staffsubject"><i class="fa fa-arrow-right"></i><span class="side-plugins">Staff Subjects</span></a></li>
              <li><a href="/ssquestion"><i class="fa fa-arrow-right"></i><span class="side-plugins">SS Question</span></a></li>
              <li><a href="/ssexam"><i class="fa fa-arrow-right"></i><span class="side-plugins">SS Exams</span></a></li>
              <li><a href="/sseq"><i class="fa fa-arrow-right"></i><span class="side-plugins">SS Exams</span></a></li>
              <li><a href="/studentsubject"><i class="fa fa-arrow-right"></i><span class="side-plugins">Student Subjects</span></a></li>
              <li><a href="/sstexam"><i class="fa fa-arrow-right"></i><span class="side-plugins">SST Exams</span></a></li> 
              <li><a href="/sstesolution"><i class="fa fa-arrow-right"></i><span class="side-plugins">SSTE Solutions</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="sidebar-footer">
      <a href="#" class=" sidebar-footer ml-5 btn btn-primary" data-toggle="modal" data-target="#exampleModalAdd">
        <i class="fa fa-plus"></i></a>
      </button>
    </div>
                        <!---------------end-sidebar-------------->
          
          
                         <!-------------start-navbar--------------->
           
            <div class="page">         
              <div class="col-12 ">
                 <div class="fixd-top mt-2">
                  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
                    <div class="sidebar-btn">
                      <i class="fa fa-bars"></i>
                    </div>
                    <a class="navbar-brand" href="#">Home</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div  style="justify-content: flex-end;"class="collapse navbar-collapse" id="navbarNavDropdown">
                      <ul class="navbar-nav">
                       
                        <li class="nav-item dropdown mr-3">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dina Samir Elmasry
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <button class="dropdown-item" type="button">Profile</button>
                            <hr>
                            <button class="dropdown-item" type="button">Logout</button>
                          </div>
                        </li>
                        <li class="nav-item dropdown mr-3">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-adn"></i>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <button class="dropdown-item" type="button">Arabic</button>
                            <hr>
                            <button class="dropdown-item" type="button">English</button>
                          </div>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-paint-brush"></i>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <button class="dropdown-item" type="button">Profile</button>
                            <hr>
                            <button class="dropdown-item" type="button">Logout</button>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </nav>
                  </div>
                </div>
          
          <div class="titel-dash" >
            <h1>Users</h1>
            <p>Welcome Dina Samir Elmasry (Admin)</p>
          </div>
        <!---------------start-table---------------->
        
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col"> Name</th>
              <th scope="col">Dept</th>
              <th scope="col">User Name</th>
              <th scope="col">Avatar</th>
              <th scope="col">Created At</th>
              <th scope="col">Option</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Dina Elmasry</Em> </td>
              <td>CSE</td>
              <!-- <td><i class="fa fa-check"></i></td> -->
              <td>D-Samir1234</td>
              <td><div class="avater-1"></div></td>
              <td>2020-10-22 03:57:22</td>
              <td>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  <i class="fa fa-eye"></i></a>
                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModalEdit">
                   <i class="fa fa-edit"></i></a>
                <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalTrash">
                <i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Saeda Ali </td>
              <td>CSE</td>
              <td>S-Ali567</td>
              <td><div class="avater-2"></div></td>
              <td>2020-10-22 03:57:22</td>
              <td>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  <i class="fa fa-eye"></i></a>
                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModalEdit">
                   <i class="fa fa-edit"></i></a>
                <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalTrash">
                <i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Sarah Ahmed</td>
              <td>Eos.</td>
              <td>S-Ahmed1234</td>
              <td><div class="avater-3"></div></td>
              <td>2020-10-22 03:57:22</td>
              <td>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  <i class="fa fa-eye"></i></a>
                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModalEdit">
                   <i class="fa fa-edit"></i></a>
                <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalTrash">
                <i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Aida Nasser</td>
              <td>Aut quas.</td>
              <td>A-Nasser1234</td>
              <td><div class="avater-4"></div></td>
              <td>2020-10-22 03:57:22</td>
              <td>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  <i class="fa fa-eye"></i></a>
                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModalEdit">
                   <i class="fa fa-edit"></i></a>
                <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalTrash">
                <i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Aya Ali</td>
              <td>Eius sit.</td>
              <td>A-Ali1234</td>
              <td><div class="avater-5"></div></td>
              <td>2020-10-22 03:57:22</td>
              <td>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  <i class="fa fa-eye"></i></a>
                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModalEdit">
                   <i class="fa fa-edit"></i></a>
                <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalTrash">
                <i class="fa fa-trash"></i></a>
              </td>
            </tr>
          </tbody>
        </table>
                <!------------------end-table---------------->
                <!------------------Show----------------->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLabel">Selected item Details</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <!------------------------------------------>
                <div class="modal-body">
                  <form>
                    <input class="form-control form-control-lg" type="text" placeholder= "Name:Faculty of Engineering">
                    <input class="form-control form-control-lg" type="text" placeholder="Code:ENG">
                    <input class="form-control form-control-lg" type="text" placeholder="Location:المنصوره شارع البحر-الحرم الجامعى البوابه الرئيسيه">
                    <input class="form-control form-control-lg" type="text" placeholder="Avatar">
                    <input class="form-control form-control-lg" type="text" placeholder="Number of Departments:9">
                    <textarea class="form-control form-control-lg" type="text" placeholder="Description:(050)2202245-2202284    
                    البريد الالكترونى:E-mail:engfac@mans.edu.eg"></textarea>
                    <input class="form-control form-control-lg" type="text" placeholder="Is Active?:">
                    <input class="form-control form-control-lg" type="text" placeholder="Created At:2020-10-26 13:49:52">
                    <input class="form-control form-control-lg" type="text" placeholder="Updated At:2020-10-17 18:27:45">
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Update</button>
                <button type="button" class="btn btn-danger">Cancel</button>
              </div>
            </div>
          </div>
        </div>
                   <!----------------edit-------------->
          
            <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title" id="exampleModalLabel">Edit Item</h1>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <!----------------------------------------------------------------------->
                <div class="modal-body">
                  <form>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationDefault01">Name</label>
                        <input type="text" class="form-control" id="validationDefault01" value="" required>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="validationDefault02">Email</label>
                        <input type="email" class="form-control" id="validationDefault02" value="" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationDefault01"> User-Name</label>
                        <input type="text" class="form-control" id="validationDefault01" value="" required>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="validationDefault02">Password</label>
                        <input type="password" class="form-control" id="validationDefault02" value="" required>
                      </div>
                    </div>
                    <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationDefault04">Colloge</label>
                      <select class="custom-select" id="validationDefault04" required>
                        <option selected disabled value="">Faculty of Engineering</option>
                        <option>Faculty of Engineering</option>
                        <option>Faculty of Engineering</option>
                        <option>Faculty of Engineering</option>
                        <option>Faculty of Engineering</option>
                      </select>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="validationTextarea">role</label>
                      <select class="custom-select" id="validationDefault04" required>
                        <option selected disabled value="">Admin</option>
                        <option>Student</option>
                        <option>Staff</option>
                        <option>Parent</option>
                      </select>
                    </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationDefault02">Address</label>
                        <input type="text" class="form-control" id="validationDefault02" value="" required>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="validationTextarea"> Gender</label>
                        <select class="custom-select" id="validationDefault04" required>
                          <option selected disabled value="">Male</option>
                          <option>Femal</option>
                          <option>Other</option>
                        </select>
                      </div>
                      </div>
                       
                        <div class="form-row">
                          <div class="col-md-6 mb-3">
                            <label class="col-12" for="validatedCustomFile">Avatar</label>
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                              <label class="custom-file-label" for="validatedCustomFile"></label>
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="validationDefault02">Birth-day</label>
                            <input type="date" class="form-control" id="validationDefault02" value="" required>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col-md-6 mb-3">
                            <label class="col-12" for="validatedCustomFile">National-Id</label>
                            <input type="id" class="form-control" id="validationDefault02" value="" required>
                            </div>
                            <div class="col-md-6 mb-3">
                              <label class="col-12" for="validatedCustomFile">LinkedIn</label>
                              <input type="email" class="form-control" id="validationDefault02" value="" required>
                              </div>
                          </div>
              
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Update</button>
                  <button type="button" class="btn btn-danger">Cancel</button>
                </div>
              </div>
            </div>
          </div>
                   <!---------------trach-------------->
          <div class="modal" id="exampleModalTrash" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content text-center">
              <div class="modal-header">
                <button type="button" class="btn btn-outline-dark border-radius:50%;
                margin-left: 50%;"><i class="fa fa-question"></i></button>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h1>Confirmation</h1>
                <p>Are you sure to delete this item ?</p>
              </div>
              <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary">OK</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                
              </div>
            </div>
          </div>
        </div>
                     <!------------------Add----------------->
        <div class="modal fade" id="exampleModalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title" id="exampleModalLabel">Add New Item</h1>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>


            <!----------------------------------------------------------------------->
            <div class="modal-body">
              <form>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationDefault01">Name</label>
                    <input type="text" class="form-control" id="validationDefault01" value="" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationDefault02">Email</label>
                    <input type="email" class="form-control" id="validationDefault02" value="" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationDefault01"> User-Name</label>
                    <input type="text" class="form-control" id="validationDefault01" value="" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationDefault02">Password</label>
                    <input type="password" class="form-control" id="validationDefault02" value="" required>
                  </div>
                </div>
                <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault04">Colloge</label>
                  <select class="custom-select" id="validationDefault04" required>
                    <option selected disabled value="">Faculty of Engineering</option>
                    <option>Faculty of Engineering</option>
                    <option>Faculty of Engineering</option>
                    <option>Faculty of Engineering</option>
                    <option>Faculty of Engineering</option>
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationTextarea">role</label>
                  <select class="custom-select" id="validationDefault04" required>
                    <option selected disabled value="">Admin</option>
                    <option>Student</option>
                    <option>Staff</option>
                    <option>Parent</option>
                  </select>
                </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationDefault02">Address</label>
                    <input type="text" class="form-control" id="validationDefault02" value="" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationTextarea"> Gender</label>
                    <select class="custom-select" id="validationDefault04" required>
                      <option selected disabled value="">Male</option>
                      <option>Femal</option>
                      <option>Other</option>
                    </select>
                  </div>
                  </div>
                   
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label class="col-12" for="validatedCustomFile">Avatar</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                          <label class="custom-file-label" for="validatedCustomFile"></label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="validationDefault02">Birth-day</label>
                        <input type="date" class="form-control" id="validationDefault02" value="" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label class="col-12" for="validatedCustomFile">National-Id</label>
                        <input type="id" class="form-control" id="validationDefault02" value="" required>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="col-12" for="validatedCustomFile">LinkedIn</label>
                          <input type="email" class="form-control" id="validationDefault02" value="" required>
                          </div>
                      </div>
          
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
              <button type="button" class="btn btn-danger">Cancel</button>
            </div>
          </div>
        </div>
      </div>





        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/plugins.js"></script>
    </body>
    
</html>