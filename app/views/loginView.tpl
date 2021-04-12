{extends file="main.tpl"}

{block name= content}
    
<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
        <div class="content">
                <h1>logowanie</h1>
         <form action="{$conf->action_url}login" method="post">
          <div class="fields">
                  <div class="field">
                          <label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
                  </div>
                  <div class="field">
                          <label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" /><br />
                  </div>
          </div>
          <ul class="actions special">
                  <li><input type="submit" value="zaloguj"  /></li>
          </ul>
  </form>       
            
        </div>
          
        <div class="image">
            
            <img src="{$conf->app_url}/images/kalkulator1.jpg" alt="alt" />
        </div>
</section>


{/block}

