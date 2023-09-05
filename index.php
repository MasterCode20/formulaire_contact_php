<!DOCTYPE html>
<html>
    <head>
        <title>Contactez-moi</title>
        <meta charset="utf-8" />
        <meta name = "viewport" content="width=device-width,initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="https://fonts.cdnfonts.com/css/lato" rel="stylesheet">
         <link rel="stylesheet" href="css/Style.css">
         <script src="js/script.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>Contactez-moi</h2>
            </div>
            <div class="row">
               <div class="col-lg-10 col-lg-offset-1">
                   <form id="contact-form" method="post" action="" role="form">
                       <div class="row">
                            <div class="col-md-6">
                                <label for="firstname">Prénom <span class="blue">*</span></label>
                                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="entrer votre prénom"  >
                                <p class="comments"></p>
                            </div>
                             <div class="col-md-6">
                             <label for="name">Nom <span class="blue">*</span></label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="entrer votre nom" >
                                <p class="comments"></p>
                             </div>

                             <div class="col-md-6">
                                <label for="email">Email<span class="blue">*</span></label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="entrer votre email"  >
                                <p class="comments"> </p>
                            </div>
                             <div class="col-md-6">
                             <label for="phone">Téléphone</label>
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="entrer votre numero de téléphone"  >
                                <p class="comments"> </p>
                             </div>

                             <div class="col-md-12">
                             <label for="message">Message<span class="blue">*</span></label>
                                <textarea id="message" name="message" class="form-control" placeholder="entrer votre message" rows="4" > </textarea>
                                <p class="comments"> </p>
                             </div>
                             <div class="col-md-12">
                              <p class="blue"><strong>* ces informations sont requises</strong></p>
                             </div>

                             <div class="col-md-12">
                                <input type="submit" class="button1" value="Envoyer">
                             </div>

                    </div>
                   </form>
                </div>
            </div>
       </div>
</body>
</html>