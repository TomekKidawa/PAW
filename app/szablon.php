{extends file="../templates/main.php"}

{block name=footer}przykladowa tresc stopki z szablonu{/block}

{block name=content}
 
				<!--KALKULATOR|| Seven -->
					
<div class="inner medium">
        <h2>Kalkulator kredytowy</h2>

        <form action="{$app_url}/app/calc_cred.php#seven" method="post">
                <div class="fields">
                        <div class="field">
                                <label for="email">Kwota:</label>
                                <input id="id_kwota" type="text" name="kwota" value="{$form['kwota']}" placeholder="wprowadź kwote" />
                        </div>
                        <div class="field">
                                <label for="email">Lata:</label>
                                <input id="id_lata>" type="text" name="lata" value="{$form['lata']}" placeholder="wprowadź lata"  />
                        </div>
                        <div class="field">
                                <label for="email">Oprocentowanie:</label>
                                <input id="id_opr" type="text" name="opr" value="{$form['opr']}" placeholder="wprowadź oprocentowanie"  />  
                        </div>

                </div>
                <ul class="actions special">
                        <li><input type="submit" value="Oblicz"  /></li>
                </ul>
        </form>


        {* wyświeltenie listy błędów, jeśli istnieją *}
        {if isset($messages)}
               {if count($messages) > 0} 
                        <ol style="padding: 10px 10px 10px 30px; border-radius: 0.5em; background-color: #EDCCB6; width:43em;">
                        {foreach  $messages as $msg}
                                {strip}
                                  <li>{$msg}</li>
                                {/strip}
                        {/foreach}
                {/if}
        {/if}

        {if isset($result)}
        <div style="padding: 1em; border-radius: 0.5em; background-color: #C8DCB8; width:43em;">


        Rata kredytu: {$result}zł

        </div>
        {/if}

 </div>
					
                            
{/block}                       

