// скрыть и открыть полностью 
document.querySelector('#foo').addEventListener('click', addblock);
var flag=1;
function addblock(){
        
    if(flag==1){
        document.querySelector('#fools').classList.remove('fools');
        document.querySelector('#span-open').style.display = 'none';
        document.querySelector('#span-closed').style.display = 'block';
        document.querySelector('#svg-up-suc').classList.add('svg-up-suc');
        console.log('1');
        flag=2;
    } else {
        document.querySelector('#fools').classList.add('fools');
        document.querySelector('#span-open').style.display = 'block';
        document.querySelector('#span-closed').style.display = 'none';
        document.querySelector('#svg-up-suc').classList.remove('svg-up-suc');
        console.log('2');
        flag=1;
    };
};    

