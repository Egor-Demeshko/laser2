<form id="form" name="form">
    <fieldset>
        <legend>Оставьте сообщение</legend>
        <div class="input-area">
            <div>
            <input type="text" placeholder="Ваше имя" name="name" required></input>
            <span aria-hidden="true"></span>
            </div>
            <div>
            <input type="email" placeholder="Ваш контактный E-Mail" name="email"></input>
            <span aria-hidden="true"></span>
            </div>
            <div>
            <input type="tel" name="phone" placeholder="Ваш контактный номер" pattern="^[\+]?[0-9]{7,13}" required></input>
            <span aria-hidden="true"></span>
            </div>
            <div><textarea name="request" placeholder="Введите ваше сообщение"></textarea></div>
            <button name="button">ОТПРАВИТЬ</button>
        </div>
    </fieldset>
</form>