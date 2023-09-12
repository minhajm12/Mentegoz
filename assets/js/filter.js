
const btns = document.querySelectorAll(".portfolio-btn");
const storeData = document.querySelectorAll(".portfolo-box");
const innerTab =document.getElementById("portfolio-innner-tab");
const innerBtns = document.querySelectorAll('.inner_btn')
const webTab = document.querySelectorAll('.port-web')

btns.forEach((btn) => {
    btn.addEventListener("click",(e) => {
        e.preventDefault();
        btns.forEach((item)=>item.classList.remove('active'))
        btn.classList.add("active");
        const filter = e.target.dataset.filter;

        storeData.forEach((item) => {
            if(filter === 'all'){
                item.style.display = 'block';
                innerTab.style.display = 'none';
                
            }else if(filter === 'port-web'){
                item.style.display = 'none';
                innerTab.style.display = 'block';
                innerBtns[0].classList.add("active");

                webTab.forEach((item)=> {
                    if(item.classList.contains('web-cms')){
                        item.style.display = "block"
                    }
                })
            }else{
                if(item.classList.contains(filter)){
                    item.style.display = 'block';
                    innerTab.style.display = 'none';
                }else{
                    item.style.display = 'none'
                }

            }
        })

    })
})



innerBtns.forEach((btn)=>btn.addEventListener('click', function(e){
    e.preventDefault()
    innerBtns.forEach((btn)=> btn.classList.remove('active'))
    btn.classList.add('active')

    const filter = e.target.dataset.filter

    storeData.forEach((item)=>{


        item.style.display = 'none'
        
        if(filter === 'web-cms' ){
            if(item.classList.contains(filter)){
                item.style.display = 'block';
            }   
        }
        if(filter === 'web-wp' ){
            if(item.classList.contains(filter)){
                item.style.display = 'block';
            }   
        }
        if(filter === 'web-ecommerce' ){
            if(item.classList.contains(filter)){
                item.style.display = 'block';
            }   
        }
    })

}))
