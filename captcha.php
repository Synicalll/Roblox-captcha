<script src="https://client.arkoselabs.com/fc/api/?onload=loadChallenge" async defer></script>
<script>
let firstRun = true;
function loadChallenge() {
    if(firstRun) {
        firstRun = false;
    } else {
        window.parent.postMessage({ message: "CaptchaLoaded", value: "True" }, "*");
        new FunCaptcha({
        public_key: "476068BF-9607-4799-B53D-966BE98E2B81",
        target_html: "FunCaptcha",
        callback: function(key) {
            window.parent.postMessage({ message: "sendKey", value: key }, "*");
            closeChallenge()
        }
    });   
    }
}
function closeChallenge() {
    document.getElementById("FunCaptcha").innerHTML = "";
}
window.addEventListener('DOMContentLoaded', (event) => {
    setTimeout(loadChallenge, 850)
});
</script>
<div id="FunCaptcha"></div>
