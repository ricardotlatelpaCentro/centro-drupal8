
//  *************TAB ONE JS***************
const tab_icons = document.querySelectorAll('.tab__icon');
const trigger = document.querySelectorAll('.trigger-tab');
const hidden_info = document.querySelectorAll('.info-container');


function toggleContent(sent_index){
    hidden_info.forEach((info, index) => {
        if(index === sent_index){
            info.classList.toggle("info-container--open");
        }
    })
    tab_icons.forEach((tab, index) => {
        if(index === sent_index){
            tab.classList.toggle("tab__icon--down");
        }        
    })
}

trigger.forEach((el, index) => {    
    el.addEventListener('click', function(e){        
        toggleContent(index);
    })
})



