document.addEventListener('DOMContentLoaded', function () {
    // let links = document.querySelectorAll('.change_status_reviews');
    // if(links.length > 0) {
    // 	links.forEach(link => {
    // 		console.log(link);
    // 	});
    // }
    let block = document.querySelector('.admin_page_reviews');
    if (block) {
        block.addEventListener('click', function (e) {
            let target = e.target;
            if (target.classList.contains('change_status_reviews') || target.closest('.change_status_reviews')) {
                let reviewsId = "";
                if ('reviewsId' in target.dataset === true) {
                    reviewsId = target.dataset.reviewsId;
                } else {
                    reviewsId = target.closest('.change_status_reviews').dataset.reviewsId;
                }
                $.ajax({
                    url: 'index.php?route=catalog/reviews/change_status&user_token=' + getURLVar('user_token') + '&reviews_id=' + reviewsId,
                    dataType: 'html',
                    success: function () {
                        location.reload();
                    }
                });
            }

            if (target.classList.contains('delete_review') || target.closest('.delete_review')) {
                let reviewsId = "";
                if ('reviewsId' in target.dataset === true) {
                    reviewsId = target.dataset.reviewsId;
                } else {
                    reviewsId = target.closest('.delete_review').dataset.reviewsId;
                }
                $.ajax({
                    url: 'index.php?route=catalog/reviews/delete_review&user_token=' + getURLVar('user_token') + '&reviews_id=' + reviewsId,
                    dataType: 'html',
                    success: function () {
                        location.reload();
                    }
                });
            }
        });
    }
});