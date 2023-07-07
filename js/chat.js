
const chatTemplate=document.querySelector("[chat-template]")
const chatContainer=document.querySelector("[chat-contenir]")

fetch("https://jsonplaceholder.typicode.com/comments")
.then(res=>res.json())
.then(data => {
    data.forEach(chats =>{
        const chat = chatTemplate.content.cloneNode(true).children[0]
        console.log(Comment)
        const names=chat.querySelector("[data-name]")
        const bodys=chat.querySelector("[data-body]")
        names.textContent=chats.name
        bodys.textContent=chats.body
        chatContainer.append(chat)
    })
})
