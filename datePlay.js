
var today = new Date();
var hourNow = today.getHours();
var greeting;

function jojo(){
  if (hourNow > 18){
    greeting = 'hey';
  }
  else if (hourNow > 12){
    greeting = "good afternoon";
  }
  else if (hourNow > 0){
    greeting = "good morning" + "what";
  }
  else {
    greeting = "welcome";
  }

  return greeting;
}
