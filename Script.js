// Add event listeners to unlock rewards when clicked
const rewards = document.querySelectorAll('.reward');
rewards.forEach((reward) => {
  reward.addEventListener('click', () => {
    reward.querySelector('.reward-status').textContent = 'Unlocked';
    reward.classList.add('unlocked');
  });
});


function setProgressBarHeight(heightPercentage) {
  var progressBar = document.querySelector('.progress');
  progressBar.style.height = heightPercentage + '%';
}

// Example usage
setProgressBarHeight(60); // Sets progress bar height to 60%