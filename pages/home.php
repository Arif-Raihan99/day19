<?php include "pages/includes/header.php"; ?>

    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body">
                        <form action="action.php" method="post">
                            <div class="form-group row">
                                <lable for="" class="col-md-4 col-form-label">Input Word</lable>
                                <div class="col-md-8">
                                    <input type="text" name="inputValue" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <lable for="" class="col-md-4 col-form-label">Select Type</lable>
                                <div class="col-md-8">
                                    <lable><input type="radio" name="type" value="word">Word Count</lable>
                                    <lable><input type="radio" name="type" value="character">Character Count</lable>
                                </div>
                            </div>
                            <div class="form-group row">
                                <lable for="" class="col-md-4 col-form-label">Result</lable>
                                <div class="col-md-8">
                                    <textarea name="" id="" cols="30" rows="5" class="form-control" readonly >
                                        <?php echo isset($result) ? "$givenWord\n$wordCount\n$characterCount" : '' ; ?>
                                    </textarea>


<!--                                    <input type="text" readonly class="form-control" value="--><?php //echo isset($result)? $result : '' ; ?><!--">-->
                                </div>
                            </div>
                            <div class="form-group row">
                                <lable for="" class="col-md-4 col-form-label"></lable>
                                <div class="col-md-8">
                                    <input type="submit" name="btn" class="btn btn-outline-success btn-block" value="Get-Result">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include "pages/includes/footer.php"; ?>