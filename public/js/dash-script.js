const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});




// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})







const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})





if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})


// Dark mode
const switchMode = document.getElementById('switch-mode');

switchMode.addEventListener('change', function () {
	if(this.checked) {
		document.body.classList.add('dark');
	} else {
		document.body.classList.remove('dark');
	}
})


// Konfimasi sebelum keluar
const logoutLink = document.getElementById('logout-link');
    
logoutLink.addEventListener('click', function(event) {
	event.preventDefault();
	const confirmed = confirm("Apakah Anda yakin ingin keluar?");
	if (confirmed) {
		window.location.href = this.href;
	}
});


// Modal
function openModal() {
	document.getElementById("discussionModal").style.display = "block";
}

function closeModal() {
	document.getElementById("discussionModal").style.display = "none";
}

function sendMessage() {
	var message = document.getElementById("chatMessage").value;
	if(message.trim() !== "") {
		// Create a new chat bubble dynamically
		var chatContainer = document.querySelector('.chat-container');
		var chatBubble = document.createElement('div');
		chatBubble.className = 'chat-bubble right';

		var avatar = document.createElement('img');
		avatar.src = '/img/avatar2.png';
		avatar.className = 'avatar';

		var bubbleContent = document.createElement('div');
		bubbleContent.className = 'bubble-content';
		bubbleContent.innerHTML = `<p>${message}</p><span class="chat-time">Just now</span>`;

		chatBubble.appendChild(avatar);
		chatBubble.appendChild(bubbleContent);
		chatContainer.appendChild(chatBubble);

		// Clear the input field
		document.getElementById("chatMessage").value = "";
		chatContainer.scrollTop = chatContainer.scrollHeight;
	} else {
		alert("Please enter a message!");
	}
}

// Close modal when clicking outside of modal-content
window.onclick = function(event) {
	var modal = document.getElementById("discussionModal");
	if (event.target == modal) {
		modal.style.display = "none";
	}
}

