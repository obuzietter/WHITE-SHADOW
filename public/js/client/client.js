window.addEventListener('load', () => {
    document.querySelector("#side-menu").style.width = "300px"
    document.querySelector("#side-menu").style.minWidth = "300px"
    document.querySelector("#open").style.opacity = "0"

    location.href = "#"
  });

document.querySelector("#open").addEventListener("click", ()=>{
    document.querySelector("#side-menu").style.width = "300px"
    document.querySelector("#side-menu").style.minWidth = "300px"
    document.querySelector("#open").style.opacity = "0"
    console.log("click");
})
document.querySelector("#close").addEventListener("click", ()=>{
    document.querySelector("#side-menu").style.width = "0"
    document.querySelector("#side-menu").style.minWidth = "0"
    document.querySelector("#open").style.opacity = "1"
})

document.querySelector("#gallery-menu").addEventListener("click", ()=>{
    location.href = "#my-gallery"
})
document.querySelector("#reviews-menu").addEventListener("click", ()=>{
    location.href = "#my-reviews"
})
document.querySelector("#transactions-menu").addEventListener("click", ()=>{
    location.href = "#my-transactions"
})
document.querySelector("#sessions-menu").addEventListener("click", ()=>{
    location.href = "#my-sessions"
})

const modal = document.querySelector("#mod")
// modal.show();


document.querySelector("#open-btn").addEventListener("click", ()=>{
    modal.showModal()
    console.log("click");
    
})
document.querySelector("#close-btn").addEventListener("click", ()=>{
    modal.close()
})


    document.querySelector("#booking-btn").addEventListener("click", ()=>{
        document.querySelector("#booking-modal").showModal();
    })
    document.querySelector("#booking-btn-close").addEventListener("click", ()=>{
        document.querySelector("#booking-modal").close();
    })
    
    


  