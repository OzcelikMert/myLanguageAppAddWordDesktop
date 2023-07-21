<div class="card">
    <div class="card-body">
        <h5 class="card-title"><?= isset($formId) ? "" : "Add Word & Sentence" ?></h5>
        <div class="row">
            <div class="col-md-12">
                <form id="<?= isset($formId) ? $formId : "addForm" ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="name" class="form-label">Target Language</label>
                            <input type="text" class="form-control" name="textTarget" required>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="name" class="form-label">Native Language</label>
                            <input type="text" class="form-control" name="textNative" required>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="name" class="form-label">Comment</label>
                            <input type="text" class="form-control" name="comment">
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="name" class="form-label">Word Type</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="wordType" value="1" required checked>
                                    Word
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="wordType" value="2" required>
                                    Sentence
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="name" class="form-label">Study Type</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="studyType" value="1" required checked>
                                    Daily
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="studyType" value="2" required>
                                    Weekly
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="studyType" value="3" required>
                                    Monthly
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <button type="submit" class="btn btn-success w-100"><?= isset($formId) ? "Update" : "Add" ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>