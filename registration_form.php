<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Форма реєстрації</title>
</head>
<body>
  <form id="register-form" action="process_registration.php" method="POST">
    <label for="login">Логін в системі (від 3 до 13 символів a-z, 0-9)</label>
    <input type="text" name="login" id="login" pattern="[a-z0-9]{3,13}" required>

    <label for="password">Пароль (не менше 6 символів)</label>
    <input type="password" name="password" id="password" minlength="6" required>

    <label for="confirm_password">Повторіть пароль</label>
    <input type="password" name="confirm_password" id="confirm_password" minlength="6" required>

    <label for="email">Ваш email</label>
    <input type="email" name="email" id="email" required>

    <label for="surname">Прізвище</label>
    <input type="text" name="surname" id="surname">

    <label for="name">Ім'я</label>
    <input type="text" name="name" id="name">

    <label for="country">Країна</label>
    <input type="text" name="country" id="country">

    <label for="mobile_phone">Мобільний телефон</label>
    <input type="tel" name="mobile_phone" id="mobile_phone">

    <label for="referrer">Звідки Ви про нас дізналися?</label>
    <input type="text" name="referrer" id="referrer">

    <label for="friend_login">Логін Вашого друга</label>
    <input type="text" name="friend_login" id="friend_login">

    <label for="tariff_plan">Тарифний план</label>
    <select name="tariff_plan" id="tariff_plan">
      <option value="1">Тариф 1</option>
      <option value="2">Тариф 2</option>
      <option value="3">Тариф 3</option>
    </select>

    <label for="another_tariff">Інший тарифний план</label>
    <select name="another_tariff" id="another_tariff">
      <option value="1">Тариф 1</option>
      <option value="2">Тариф 2</option>
      <option value="3">Тариф 3</option>
    </select>

    <input type="submit" value="Зареєструватися">
  </form>
</body>
</html>
