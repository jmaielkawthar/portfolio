<?php
$class = isset($class) ? $class : [];
$image = isset($image) ? $image:'';
$headline = isset($headline) ? $headline : '';
$text = isset($text) ? $text:'';
$btn = isset($btn) ? $btn : '';
?>
<div class="ce-contact">
    <div class="container">
        <div class="row header ">
        <div class=" col-sm-6 col-12 teaser-image">
                <?php if( !empty( $image ) ): ?>
                    <figure>
                        <img src="<?php echo $image; ?>" alt="map image" title="map image">
                    </figure>
                <?php endif; ?>
            </div>
            <div class="col-sm-6 col-12">
                <div class="contact-info">
                <form class="needs-validation  my-40" novalidate>
                                <div class="form-group">
                                    <div class="form-row  mb-10">
                                        <div class="col-md-6 required-block">
                                            <input class="form-control" type="text" placeholder="name ..." required />
                                        </div>
                                        <div class="col-md-6 required-block">
                                            <input class="form-control" placeholder="lastname ..." type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-row  mb-10">
                                        <div class="col-md-12  required-block">
                                            <select class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-row  mb-10">
                                        <div class="col-md-12 required-block ">
                                            <input class="form-control" type="email" placeholder="E-Mail (Plichtfeld) ..." required="">

                                            <a class="link forget-password" href="#">
                                                Passwort vergessen?
                                            </a>
                                        </div>
                                    </div>
                        
                                    <div class="form-row  mb-10">
                                      
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                                            <label class="form-check-label" for="flexCheckChecked">
                                                please check the checkmark if you want to send your message.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row mb-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                female
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                               male
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row  mb-10">
                                        <div class="col-md-3">
                                            <input type="submit" value="submit" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>