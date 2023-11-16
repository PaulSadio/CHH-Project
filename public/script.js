function attendacebtn() {
  const attendance = document.getElementById('attendancebtn');
  if(attendance.textContent == 'Present' && confirm('Are you sure you want to change the status of this member?') == true){
   attendance.style.background = '#D9D9D9';
   attendance.textContent = 'Pending';
  } else if(attendance.textContent == 'Pending' && confirm('Are you sure you want to change the status of this member?') == true) {
    attendance.style.background = '#32D942';
    attendance.textContent = 'Present';
  }
}

function attendacebtn2() {
  const attendance = document.getElementById('attendancebtn2');
  if(attendance.textContent == 'Present' && confirm('Are you sure you want to change the status of this member?') == true){
   attendance.style.background = '#D9D9D9';
   attendance.textContent = 'Pending';
  } else if(attendance.textContent == 'Pending' && confirm('Are you sure you want to change the status of this member?') == true) {
    attendance.style.background = '#32D942';
    attendance.textContent = 'Present';
  }
}

function attendacebtn3() {
  const attendance = document.getElementById('attendancebtn3');
  if(attendance.textContent == 'Present' && confirm('Are you sure you want to change the status of this member?') == true){
   attendance.style.background = '#D9D9D9';
   attendance.textContent = 'Pending';
  } else if(attendance.textContent == 'Pending' && confirm('Are you sure you want to change the status of this member?') == true) {
    attendance.style.background = '#32D942';
    attendance.textContent = 'Present';
  }
}

function btn() {
const btn = document.getElementById('status');
if(btn.textContent == 'Active' && confirm('Are you sure you want to change the status of this member?') == true){
  btn.style.background = '#D9D9D9';
  btn.textContent = "Inactive";
} else if(btn.textContent == 'Inactive' && confirm('Are you sure you want to change the status of this member?') == true) {
  btn.style.background = '#32D942';
  btn.textContent = 'Active';
}
};

