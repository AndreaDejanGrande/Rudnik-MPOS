 <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-info">
        <div class="panel-heading">
          <i class="fa fa-question fa-fw"></i> Getting Started Guide
        </div>
        <div class="panel-body">
        
    <p>1. <strong>Create account.</strong></p>
      <ul>
        <li>Register <a href="{$smarty.server.SCRIPT_NAME}?page=register">here</a>, or login if you already have account</li>
        <li>Create a <a href="{$smarty.server.SCRIPT_NAME}?page=account&action=workers">worker</a> that will be used by the miner to login</li>
      </ul>
    </li>
    <p>2. <strong>Download a miner.</strong></p>
      <ul>
        {if $GLOBAL.config.algorithm == 'sha256d'}
        <li><em>Intel/ATI/AMD CGMiner Windows:</em> <a href="http://ck.kolivas.org/apps/cgminer/cgminer-4.2.2-windows.zip" target="_blank">Download here</a></li>
        <li><em>Intel/ATI/AMD CGMiner Linux:</em> <a href="http://ck.kolivas.org/apps/cgminer/cgminer-4.2.2.tar.bz2" target="_blank">Download Here</a></li>
	{/if}
	{if $GLOBAL.config.algorithm == 'scrypt'}
	<li><em>Svarog Miner (vCrypt CPU software) Windows:</em> <a href="https://github.com/AndreaDejanGrande/Svarog/releases/download/v1.0/svarog-win32-v1-0.zip" target="_blank">download here (v1.0)</a></li>	
	<li><em>Svarog Miner (vCrypt CPU software) Linux:</em> <a href="https://github.com/AndreaDejanGrande/Svarog" target="_blank">source code</a></li>	
	{/if}
      </ul>
    </li>
    <p>3. <strong>Configure your miner.</strong></p>
    <ul>
      <p>If you're using Linux, Then type the following into the console:</p>
      <li>Svarog Miner</li>
      <pre>./minerd -a vcrypt -o stratum+tcp://{$SITESTRATUMURL|default:$smarty.server.SERVER_NAME}:{$SITESTRATUMPORT|default:"3333"} -u <em>Weblogin</em>.<em>WorkerName</em> -p <em>WorkerPassword</em></pre>
      <br />
	  <p> If you want to mine on a <strong> Windows Operating System</strong>, then you'll need to create a batch file to start your miner. </p><p> Simply open notepad and then copy and paste the following:</p>
      <li>Svarog Miner</li>
      <pre>minerd -a vcrypt -t 6 -s 4 -o stratum+tcp://{$SITESTRATUMURL|default:$smarty.server.SERVER_NAME}:{$SITESTRATUMPORT|default:"3333"} -u <em>Weblogin</em>.<em>WorkerName</em> -p <em>WorkerPassword</em></pre>
	  <br />
	  <p> You then need to change "-u Weblogin.Worker -p Worker password" to reflect your own account. Eg, "-u Steve.StevesWorker -p StevesWorkerPassword" then go to "File > Save as" and save the file as "RunMe.bat" in the same folder containing your miners application files. You are now ready to mine, double click on "RunMe.bat" to start mining. If you want, you can create additional workers with usernames and passwords of your choice <a href="{$smarty.server.SCRIPT_NAME}?page=account&action=workers">here</a></p>
    </ul>
    <p>4. <strong>Create a {$SITECOINNAME|default:"Litecoin"} address to receive payments.</strong></p>
      <ul>
        <li> Downloading the client &amp; block chain: 	Download the {$SITECOINNAME|default:"Litecoin"} client from <a href="{$SITECOINURL|default:"http://www.litecoin.org"}" target="_blank">here</a>.
          <p>Generate a new address and input it on your account page to receive payments.</p>
        </li>
      </ul>
    </li>
        </div>
      </div>
    </div>
    <!-- /.col-lg-12 -->
  </div>
