
  <form action="glacier.php" method="post">
    <fieldset>
      <legend>Parfums : 2 euros / choix</legend>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Vanille" id="checkVanille" name="parfums[]">
        <label class="form-check-label" for="checkVanille">
          Vanille
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Fraise" id="checkFraise" name="parfums[]">
        <label class="form-check-label" for="checkFraise">
          Fraise
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Chocolat" id="checkChocolat" name="parfums[]">
        <label class="form-check-label" for="checkChocolat">
          Chocolat
        </label>
      </div>
    </fieldset>
    <fieldset>
      <legend>Topping : 1 euro / choix</legend>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Chantilly" id="checkChantilly" name="topping[]">
        <label class="form-check-label" for="checkChantilly">
          Chantilly
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Noisettes" id="checkNoisette" name="topping[]">
        <label class="form-check-label" for="checkNoisette">
          Noisettes grillées
        </label>
      </div>
    </fieldset>    <fieldset>
      <legend>Pot ou Cornet (0.50 euros)</legend>
      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="switchCornet" name="cornet">
        <label class="form-check-label" for="switchCornet">En cornet</label>
      </div>
    </fieldset>
    <button type="submit" class="btn btn-primary m-2">Commander</button>
  </form>
