<div class="card">
    <div class="card-body">
        <h5 class="card-title">Add Word & Sentence</h5>
        <div class="row">
            <div class="col-md-7">
                <form id="addForm">
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
                                <input class="form-check-input" type="radio" name="wordType" id="wordType_1" value="1" required checked>
                                <label class="form-check-label" for="wordType_1">Word</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="wordType" id="wordType_2" value="2" required>
                                <label class="form-check-label" for="wordType_2">Sentence</label>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="name" class="form-label">Study Type</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="studyType" id="studyType_1" value="1" required checked>
                                <label class="form-check-label" for="studyType_1">Daily</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="studyType" id="studyType_2" value="2" required>
                                <label class="form-check-label" for="studyType_2">Weekly</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="studyType" id="studyType_3" value="3" required>
                                <label class="form-check-label" for="studyType_3">Monthly</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 w-50 float-end">Ekle</button>
                </form>
            </div>
        </div>
    </div>
</div>