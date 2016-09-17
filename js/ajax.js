function searchDB() {
//  var projectType = $("#searchType").val();
//  if (projectType === "pleaseSelect"){
//    projectType = "";
//  }
  var searchEvent = $("#searchName").val();
//  var searchDescription = $("#searchDescription").val();
//  if (projectType !== "" || searchName !== "" || searchDescription !== ""){
    if (searchEvent !== "") {
    var searchInfo = {type: searchEvent};
      searchResult = $.ajax({
        url: 'php/ajax.php',
        method: 'POST',
        data: searchInfo,
        dataType: 'text',
        error: function(error) {
          console.log(error);
        }
      });
      searchResult.success(function(data){
        data = JSON.parse(data);
        var result = "<h2>Your search returned "+data.length+" results.</h2>";
        result += "<table>";
        var i = 0
        while (i < data.length){
          var project = data[i];
          if (i % 4 === 0){
            result += "<tr>";
          }
            //will need to be tailored to fit our particular site MODIFY THIS MODIFY THIS MODIFY THIS MODIFY THIS
          result += "<td><div class = 'thumbDisplay'><a href = 'projects.php?projectID="+project["id"]+"'><img src= 'img/"+project.path+"' alt='Photo' class='photoPreview'/><h2>"+project["name"]+"</h2></div></td>";
          if (i % 4 === 3){
            result += "</tr>";
          }
          i++;
        }
        while (i % 4 !== 0){
          result += "<td></td>";
          if (i % 4 === 3){
            result += "</tr>";
          }
          i++;
        }
        result += "</table>";
          //MODIFY THIS
        $("#searchResults").html(result);
      });
  } else {
      //MODIFY THIS
    $("#searchResults").html("");
  } 
}