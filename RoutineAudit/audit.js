var theID;

var theSearch;
var theNew;
var theEdit;
var theTitle = document.getElementsByTagName("title")[0];
            
window.onload = function(){
    loadPage();
}

function loadPage(){
    theSearch = document.getElementById('panelSearch');
    theNew = document.getElementById('newAudit');
    theEdit = document.getElementById('editAudit');
    theSearch.style.display = "none";
    theNew.style.display = "none";
    theEdit.style.display = "none";
}
            
function openDiv(theId){
    var x = document.getElementById(theID);
    switch(theID){
        case 'panelSearch':
            var y = theNew;
            theTitle.innerHTML = "Search";
            break;
        case 'newAudit':
            var y = theSearch;
            theTitle.innerHTML = "New Audit";
            break;
        default :
            break;
        }
        if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display = "none";
        }else{
            x.style.display = "none";
            y.style.display = "block";
        }
}
           
