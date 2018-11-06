
function clickHere(){
    var myName = document.getElementById('myName').value;
    var count = 0;
    var lastSpace = myName.lastIndexOf(" ");
    var spaceCount = 0;
    var firstSpace = myName.indexOf(" ");
    var lastName = myName.slice(0, firstSpace);
    var firstName = myName.slice(lastSpace);
    var name = myName.slice(firstSpace);
    var middleName = myName.slice(firstSpace, lastSpace);
    for (i = 0; i < myName.length; i++) {
        if (myName.indexOf('n', i) == i || myName.indexOf('N', i) == i) {
        count += 1
        }
        if (myName.indexOf(' ', i) == i) {
            spaceCount += 1
        }
        document.getElementById('countN').innerHTML = count;
        document.getElementById('replace').innerHTML =(myName.slice(0, lastSpace) + lastName.replace(lastName, "18PHP06"));
        document.getElementById('uncountSpace').innerHTML = (myName.length - spaceCount);
        document.getElementById('upcase').innerHTML = (lastName.toUpperCase() + name);
        document.getElementById('upcasemiddlename').innerHTML = (lastName + middleName.toLowerCase() + firstName);
   }  
}
function reload() {
    location.reload();
}
