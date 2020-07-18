const $detailsList = document.querySelectorAll('details')
$detailsList.forEach(($detailsList) => {
    $detailsList.querySelector('summary').addEventListener('click', expand)
})

function expand(){
    $detailsList.forEach(($detailsList) => {
        $detailsList.removeAttribute('open')
    })
}