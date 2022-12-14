function saveSubmittedHabit() {
  console.log(document.getElementById("nameCat"));
  console.log(document.getElementById("nameHabit"));
  // create request
  const request = new XMLHttpRequest();
  // function to handle result of the request
  request.addEventListener("load", function () {
    // if the request succeeded
    if (request.status === 200) {
      // print the response to the request
      //console.log(request.response);
    }
  });
  // open the request
  request.open("POST", "createNewHabit.php");
  // send the request
  request.send();

  console.log(document.getElementById("nameCat"));
  console.log(document.getElementById("nameHabit"));
}
function test() {
  console.log(document.getElementById("nameCat").value);
  console.log(document.getElementById("nameHabit").value);
}
// function clickDelete() {
//   console.log("reading the script");
// }
