<?php

$link = mysqli_connect("localhost", "root", "", "db");

$sql = "SELECT * FROM accordion ORDER BY review DESC";

$result = mysqli_query($link, $sql);
$result = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Тестовое задание 1</title>
</head>
<body>
    <div class="container">
        <div class="first-block">
            <h1 class="first-title">
                На что рассчитывать при взыскании неустойки по ДДУ?
            </h1>
            <div class="first-text">
                <p>Когда застройщик нарушает сроки сдачи по ДДУ, вы как дольщик имеете право требовать неустойку за просрочку, а также компенсацию убытков, вызванных этой просрочкой.</p>
                <p>Само собой, застройщику невыгодно добровольно выплачивать вам компенсацию. Когда дело доходит до суда, суд урезает сумму неустойки на основании ст. 333 ГК РФ. Это урезание практически неизбежно.</p>
                <p>Основная наша задача состоит в том, чтобы взыскать неустойку по ДДУ в максимальном размере, т.е. избежать сильного ее урезания. Вот что вы можете требовать от застройщика.</p>
            </div>
        </div>
        <div class="second-blocks">
            <?php foreach ($result as $value): ?>
                <div class="second-block">
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <div class="second-card">
                                <div class="second-card-title">
                                    <?= $value['title'] ?>
                                </div>
                                <div class="second-card-review">
                                    <?php if ($value['reviews'] != 0): ?>
                                        <img src="img/star.svg" alt="Звезда">
                                        <div class="second-card-num"><?= round($value['review']) ?></div>
                                    <?php endif; ?>
                                    <div class="review-arrow"></div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-content">
                            <?= $value['description'] ?>
                        </div>
                    </div>
                    <div class="rating">
                        <input class="rating-input" type="radio" id="star5_<?= $value['id'] ?>" name="<?= $value['id'] ?>" value="5" />
                        <label for="star5_<?= $value['id'] ?>" title="Оценка 5 звезд">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.2026 1.84124C10.6661 0.930713 11.967 0.930713 12.4305 1.84124L14.143 5.20516C14.5547 6.01372 15.3386 6.56721 16.2383 6.68447L19.9582 7.16929C21.0134 7.30682 21.4251 8.61586 20.6387 9.33266L18.0657 11.6778C17.3602 12.3208 17.0386 13.2835 17.216 14.2214L17.8655 17.6545C18.0585 18.6747 16.9954 19.4719 16.0701 19.0007L12.5643 17.2157C11.7804 16.8165 10.8527 16.8165 10.0688 17.2157L6.56301 19.0007C5.63767 19.4719 4.57461 18.6747 4.76762 17.6545L5.41705 14.2214C5.59447 13.2835 5.27288 12.3208 4.56743 11.6778L1.9944 9.33266C1.20794 8.61585 1.61969 7.30682 2.67487 7.16929L6.39475 6.68447C7.29445 6.56721 8.07841 6.01372 8.49004 5.20516L10.2026 1.84124Z" stroke="#FFC700" stroke-width="1.5"/>
                            </svg>            
                        </label>
                        <input class="rating-input" type="radio" id="star4_<?= $value['id'] ?>" name="<?= $value['id'] ?>" value="4" />
                        <label for="star4_<?= $value['id'] ?>" title="Оценка 4 звезды">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.2026 1.84124C10.6661 0.930713 11.967 0.930713 12.4305 1.84124L14.143 5.20516C14.5547 6.01372 15.3386 6.56721 16.2383 6.68447L19.9582 7.16929C21.0134 7.30682 21.4251 8.61586 20.6387 9.33266L18.0657 11.6778C17.3602 12.3208 17.0386 13.2835 17.216 14.2214L17.8655 17.6545C18.0585 18.6747 16.9954 19.4719 16.0701 19.0007L12.5643 17.2157C11.7804 16.8165 10.8527 16.8165 10.0688 17.2157L6.56301 19.0007C5.63767 19.4719 4.57461 18.6747 4.76762 17.6545L5.41705 14.2214C5.59447 13.2835 5.27288 12.3208 4.56743 11.6778L1.9944 9.33266C1.20794 8.61585 1.61969 7.30682 2.67487 7.16929L6.39475 6.68447C7.29445 6.56721 8.07841 6.01372 8.49004 5.20516L10.2026 1.84124Z" stroke="#FFC700" stroke-width="1.5"/>
                            </svg>  
                        </label>
                        <input class="rating-input" type="radio" id="star3_<?= $value['id'] ?>" name="<?= $value['id'] ?>" value="3" />
                        <label for="star3_<?= $value['id'] ?>" title="Оценка 3 звезды">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.2026 1.84124C10.6661 0.930713 11.967 0.930713 12.4305 1.84124L14.143 5.20516C14.5547 6.01372 15.3386 6.56721 16.2383 6.68447L19.9582 7.16929C21.0134 7.30682 21.4251 8.61586 20.6387 9.33266L18.0657 11.6778C17.3602 12.3208 17.0386 13.2835 17.216 14.2214L17.8655 17.6545C18.0585 18.6747 16.9954 19.4719 16.0701 19.0007L12.5643 17.2157C11.7804 16.8165 10.8527 16.8165 10.0688 17.2157L6.56301 19.0007C5.63767 19.4719 4.57461 18.6747 4.76762 17.6545L5.41705 14.2214C5.59447 13.2835 5.27288 12.3208 4.56743 11.6778L1.9944 9.33266C1.20794 8.61585 1.61969 7.30682 2.67487 7.16929L6.39475 6.68447C7.29445 6.56721 8.07841 6.01372 8.49004 5.20516L10.2026 1.84124Z" stroke="#FFC700" stroke-width="1.5"/>
                            </svg>
                        </label>
                        <input class="rating-input" type="radio" id="star2_<?= $value['id'] ?>" name="<?= $value['id'] ?>" value="2" />
                        <label for="star2_<?= $value['id'] ?>" title="Оценка 2 звезды">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.2026 1.84124C10.6661 0.930713 11.967 0.930713 12.4305 1.84124L14.143 5.20516C14.5547 6.01372 15.3386 6.56721 16.2383 6.68447L19.9582 7.16929C21.0134 7.30682 21.4251 8.61586 20.6387 9.33266L18.0657 11.6778C17.3602 12.3208 17.0386 13.2835 17.216 14.2214L17.8655 17.6545C18.0585 18.6747 16.9954 19.4719 16.0701 19.0007L12.5643 17.2157C11.7804 16.8165 10.8527 16.8165 10.0688 17.2157L6.56301 19.0007C5.63767 19.4719 4.57461 18.6747 4.76762 17.6545L5.41705 14.2214C5.59447 13.2835 5.27288 12.3208 4.56743 11.6778L1.9944 9.33266C1.20794 8.61585 1.61969 7.30682 2.67487 7.16929L6.39475 6.68447C7.29445 6.56721 8.07841 6.01372 8.49004 5.20516L10.2026 1.84124Z" stroke="#FFC700" stroke-width="1.5"/>
                            </svg>
                        </label>
                        <input class="rating-input" type="radio" id="star1_<?= $value['id'] ?>" name="<?= $value['id'] ?>" value="1" />
                        <label for="star1_<?= $value['id'] ?>" title="Оценка 1 звезда">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.2026 1.84124C10.6661 0.930713 11.967 0.930713 12.4305 1.84124L14.143 5.20516C14.5547 6.01372 15.3386 6.56721 16.2383 6.68447L19.9582 7.16929C21.0134 7.30682 21.4251 8.61586 20.6387 9.33266L18.0657 11.6778C17.3602 12.3208 17.0386 13.2835 17.216 14.2214L17.8655 17.6545C18.0585 18.6747 16.9954 19.4719 16.0701 19.0007L12.5643 17.2157C11.7804 16.8165 10.8527 16.8165 10.0688 17.2157L6.56301 19.0007C5.63767 19.4719 4.57461 18.6747 4.76762 17.6545L5.41705 14.2214C5.59447 13.2835 5.27288 12.3208 4.56743 11.6778L1.9944 9.33266C1.20794 8.61585 1.61969 7.30682 2.67487 7.16929L6.39475 6.68447C7.29445 6.56721 8.07841 6.01372 8.49004 5.20516L10.2026 1.84124Z" stroke="#FFC700" stroke-width="1.5"/>
                            </svg>
                        </label>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
        const accordionHeaders = document.querySelectorAll('.accordion-header');

        accordionHeaders.forEach(header => {
        header.addEventListener('click', () => {
            const accordionItem = header.parentElement;
            accordionItem.classList.toggle('active');
        });
        });

        const reviews = document.querySelectorAll('.rating-input');

        reviews.forEach(review => {
        review.addEventListener('click', () => {
            var value = review.value;
            var id = review.name;
            $.get('index.php', {value: value, id: id}, function(data){
                alert("Вы поставили " + value + "★");
            });
        });
        });
    </script>

</body>
</html>

<?php

if (!empty($_GET['value']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $value = $_GET['value'];
    $sql = "UPDATE accordion SET reviews = reviews + 1, reviews_sum = reviews_sum + $value, review = reviews_sum/reviews WHERE id = $id";
    mysqli_query($link, $sql);
}

?>