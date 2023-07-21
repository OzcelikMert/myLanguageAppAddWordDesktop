$(function() {
  $(document).on("click", ".cancelModalButton", function() {
    $(this).closest(".modal").modal("toggle");
  })
})

function getStudyTypeName(studyTypeId) {
    let name = "";
    switch(studyTypeId) {
      case 1: name = "Daily"; break;
      case 2: name = "Weekly"; break;
      case 3: name = "Monthly"; break;
    }
    return name;
}

function getWordTypeName(wordTypeId) {
    let name = "";
    switch(wordTypeId) {
      case 1: name = "Word"; break;
      case 2: name = "Sentence"; break;
    }
    return name;
}