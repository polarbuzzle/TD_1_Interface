<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- saved from url=(0066)http://www.groupes.polymtl.ca/log2420/Lab/FactSage/fs_reaction.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>FactSage.com - Reaction module</title>

<script language="JavaScript">

function popup(page) {
	var s=''
	while  (s.length<10) {
  	t = (48 + Math.round(Math.random() * 74))
  	r = ((t<58) || ((t>64) && (t<91)) || ((t>96) && (t<123))) ? String.fromCharCode(t) : ''
  	s += r
  	}
	//alert(s);
	window.open(page,s,"width=700,height=800,location=no,toolbar=no,scrollbars=yes,titlebar=no,resizable=yes");
}

</script></head>

<body bgcolor="#666666">
<table width="95%" border="0" align="center" cellpadding="1" cellspacing="0" bgcolor="#000066">
  <tbody><tr>
    <td><table width="100%" border="0" align="center" cellpadding="15" cellspacing="0" bgcolor="#999999">
        <tbody><tr> 
          <td>
<center>
              <table width="100%" border="0" cellpadding="10" cellspacing="0" bgcolor="#FFFFFF">
                <tbody><tr> 
                  <td> <center>
                      <font size="2" face="Arial, Helvetica, sans-serif"><br>
                      </font>
                      <table width="100%" border="0" cellspacing="1" cellpadding="0">
                        <tbody><tr> 
                          <td width="150"><img src="./FactSage.com - Reaction module_files/reaction-ppt2_s.jpg" width="150" height="125"></td>
                          <td><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><font size="4"><font size="5">FactSage 
                              Modules</font><strong><br>
                              <font color="#CC6600">The <img src="./FactSage.com - Reaction module_files/ReactionBUT.jpg" width="120" height="20" align="absmiddle"> 
                              module</font></strong></font></font> </div></td>
                          <td width="150">
<div align="center"><img src="./FactSage.com - Reaction module_files/reaction-TR.jpg" width="150" height="114"></div></td>
                        </tr>
                      </tbody></table>
                      </center>
                    <center>
                    </center>
                    <div align="justify"> 
                      <p><font size="2" face="Arial, Helvetica, sans-serif"><br>
                        Click on <a href="http://www.crct.polymtl.ca/fact/factsage/ReacSage.pdf" target="_blank">Download 
                        Reaction Slide Show</a> (pdf presentation - 37 pages) 
                        for detailed information on the <strong><font color="#CC6600">Reaction 
                        Module</font></strong>.</font></p>
                      <p><font size="2" face="Arial, Helvetica, sans-serif">The<strong><font color="#CC6600"> 
                        Reaction</font></strong> module is used to calculate changes 
                        in extensive thermodynamic properties (H, G, V, S, Cp, 
                        A) for a single species, a mixture of species or for a 
                        chemical reaction. The species may be pure elements, stoichiometric 
                        compounds or ions (both plasma and aqueous ions). </font></p>
                      <p><font size="2" face="Arial, Helvetica, sans-serif">For 
                        example, Fig. 2 shows the entry of the isothermal standard 
                        state reaction for the oxidation of copper: <br>
                        </font><font size="2"><font size="2">
                        </font></font></p><center><font size="2"><font size="2">
                          <font face="Arial, Helvetica, sans-serif"> 4 Cu + O<sub>2</sub> 
                          = 2 Cu<sub>2</sub>O </font>
                        </font></font></center><font size="2"><font size="2">
                        </font></font><p></p>
                      <p><font size="2" face="Arial, Helvetica, sans-serif">Note 
                        that the phases are not specified (i.e. most stable is 
                        requested). In Fig. 3 the T(K) temperature range (300 
                        to 2000 in steps of 300) is entered and <strong><font color="#CC6600">Reaction</font></strong> 
                        determines the most stable phases at each temperature 
                        and lists common thermodynamic values including the transition 
                        temperatures. </font></p>
                      <p><font size="2" face="Arial, Helvetica, sans-serif">For 
                        example at 1200 K the stable standard state phases are 
                        Cu(s), O<sub>2</sub>(g), Cu<sub>2</sub>O(s), and the changes in the standard 
                        state properties are &#916;Hº = -332.62 kJ, &#916;Gº 
                        = -162.43 kJ, &#916;Sº = -141.83 J/mol-K, Keq = 1.176 
                        x 106. All the common thermodynamic equations are respected, 
                        for example:</font></p>
                      <p align="center"><font size="2" face="Arial, Helvetica, sans-serif">&#916;Gº 
                        = &#916;Hº - T &#916;Sº = - R T <em>ln</em> 
                        K<sub>eq</sub></font></p>
                      <p><font size="2" face="Arial, Helvetica, sans-serif">Fig. 
                        4 shows entry of the non-standard state reaction:</font></p>
                      <p align="center"><font size="2" face="Arial, Helvetica, sans-serif">4 
                        Cu(s, activity X) + O2(g,Po<sub>2</sub>) = 2 Cu<sub>2</sub>O(s)</font></p>
                      <p><font size="2" face="Arial, Helvetica, sans-serif">In 
                        Fig. 5 the power of the interactive spreadsheet output 
                        format of <font color="#CC6600"><strong>Reaction</strong></font> 
                        is demonstrated. For example, in line 1 the user sets 
                        the activity of Cu(s) and the partial pressure of O<sub>2</sub> 
                        at standard conditions (a = X =1, P = 1) and the changes 
                        in the standard enthalpy (&#916;Hº = -33.54 kJ), 
                        Gibbs energy (&#916;Gº = -191.16 kJ) etc. are calculated 
                        at 1000 K. In line 2, with the activity of Cu(s) still 
                        set to unity (X = 1.0), the Gibbs energy change is set 
                        to zero (i.e. equilibrium) and the equilibrium oxygen 
                        pressure is calculated to be Po<sub>2</sub> = 1.0359 x 
                        10-10 atm. In line 3 the equilibrium activity of Cu(s) 
                        is calculated (3.1903x10-3) when Po<sub>2</sub> = 1.0 
                        atm. In the last entry (line 4) O2 with Po<sub>2</sub> 
                        = 10-12 atm and Cu with a(Cu(s)) =1 are at equilibrium 
                        (&#916;G = 0) at the calculated temperature 897.01 K. 
                        <br>
                        <br>
                        The Reaction module is a simple and effective teaching 
                        tool in giving students a <em>‘feel’</em> 
                        for thermochemical calculations. It is not limited to 
                        isothermal reactions and equilibrium constants. By appropriate 
                        entries you can perform heat balances, calculate adiabatic 
                        flame temperatures (by setting &#916;H = 0), solve simple 
                        equilibria, determine vapor pressures, calculate aqueous 
                        solubilities, etc. The results may also be automatically 
                        displayed as graphs and stored or exported in the form 
                        of spreadsheets (for example Excel®). <br>
                        <br>
                        For example, the enthalpy requirements to heat Al(s) from 
                        300 K to various temperatures are calculated in Fig 6 
                        and plotted in Fig 7. Fig. 8 illustrates a variety of 
                        calculations for the simple combustion of methane in excess 
                        oxygen. Fig 9 shows the effect of the 'VdP' term and high 
                        pressure on the graphite to diamond transition. Fig 10 
                        involves aqueous chemistry and demonstrates a thermal 
                        balance for the leaching of zinc oxide. </font> </p>
                      <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#000066">
                        <tbody><tr> 
                          <td><table width="100%" border="0" cellspacing="1" cellpadding="0">
                              <tbody><tr> 
                                <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="1" cellpadding="0">
                                    <tbody><tr> 
                                      <td height="30" bgcolor="#003366"> <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF">Fig. 
                                          1</font></strong><font color="#FFFFFF"> 
                                          -</font> <strong><font color="#FF9900">Reaction</font></strong> 
                                          <font color="#FFFFFF">Module</font></font></div></td>
                                    </tr>
                                    <tr> 
                                      <td><center>
                                          <font size="2" face="Arial, Helvetica, sans-serif"><img src="./FactSage.com - Reaction module_files/reaction-ppt2.jpg" width="600" height="330"><br>
                                          <br>
                                          <br>
                                          </font> </center></td>
                                    </tr>
                                  </tbody></table></td>
                              </tr>
                              <tr> 
                                <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="1" cellpadding="0">
                                    <tbody><tr> 
                                      <td height="30" bgcolor="#003366"> <center>
                                          <font size="2" face="Arial, Helvetica, sans-serif"> 
                                          <font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><strong>Fig. 
                                          2</strong> - <strong><font color="#FF9900">Reaction</font></strong> 
                                          Module - </font><font size="2" face="Arial, Helvetica, sans-serif"><em><font color="#FFFFFF">Reactants 
                                          Window</font></em> <font color="#FFFFFF"><br>
                                          Cu-O<sub>2</sub>-Cu<sub>2</sub>O system. 
                                          Entry of the isothermal standard state 
                                          reaction for copper oxidation.</font></font><font color="#FFFFFF">.</font></font> 
                                        </center></td>
                                    </tr>
                                    <tr> 
                                      <td><center>
                                          <font size="2" face="Arial, Helvetica, sans-serif"><img src="./FactSage.com - Reaction module_files/fig09.jpg" width="600" height="303" border="0"><br>
                                          <br>
                                          <br>
                                          </font> </center></td>
                                    </tr>
                                  </tbody></table></td>
                              </tr>
                              <tr> 
                                <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="1" cellpadding="0">
                                    <tbody><tr> 
                                      <td height="30" bgcolor="#003366"> <center>
                                          <font size="2" face="Arial, Helvetica, sans-serif"> 
                                          <font size="2" face="Arial, Helvetica, sans-serif"><font color="#FFFFFF"><strong>Fig. 
                                          3</strong> - <font color="#FF9900"><strong>Reaction</strong></font> 
                                          Module - </font><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><em>Table 
                                          Window</em> <br>
                                          Cu-O<sub>2</sub>-Cu<sub>2</sub>O system. 
                                          Calculation of common thermodynamic 
                                          values.</font> </font></font> </center></td>
                                    </tr>
                                    <tr> 
                                      <td><center>
                                          <font size="2" face="Arial, Helvetica, sans-serif"> 
                                          <a href="javascript:popup(&#39;Compound-ppt44.jpg&#39;);"><br>
                                          </a><img src="./FactSage.com - Reaction module_files/fig10.jpg" width="620" height="396" border="0"><br>
                                          <a href="javascript:popup(&#39;Compound-ppt44.jpg&#39;);"><br>
                                          <br>
                                          </a> </font> </center></td>
                                    </tr>
                                  </tbody></table></td>
                              </tr>
                              <tr> 
                                <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="1" cellpadding="0">
                                    <tbody><tr> 
                                      <td height="30" bgcolor="#003366"> <center>
                                          <font size="2" face="Arial, Helvetica, sans-serif"> 
                                          <font size="2" face="Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF">Fig. 
                                          4</font></strong><font color="#FFFFFF"> 
                                          -<font color="#FF9900"> <strong>Reaction</strong></font> 
                                          Module - </font></font></font><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><em>Reactants 
                                          Window</em> <br>
                                          Cu-O<sub>2</sub>-Cu<sub>2</sub>O system. 
                                          Entry of the isothermal non-standard 
                                          state reaction for copper oxidation.</font> 
                                        </center></td>
                                    </tr>
                                    <tr> 
                                      <td><center>
                                          <font size="2" face="Arial, Helvetica, sans-serif"> 
                                          <a href="script:popup(%27viewData-ppt71.jpg%27);"><br>
                                          </a><a href="javascript:popup(&#39;fig11.jpg&#39;);"><img src="./FactSage.com - Reaction module_files/fig11.jpg" width="620" height="400" border="0"><br>
                                          <br>
                                          </a><a href="javascript:popup(&#39;Compound-ppt46.jpg&#39;);"><br>
                                          </a> </font> </center></td>
                                    </tr>
                                  </tbody></table></td>
                              </tr>
                              <tr> 
                                <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="1" cellpadding="0">
                                    <tbody><tr> 
                                      <td height="30" bgcolor="#003366"> <center>
                                          <font size="2" face="Arial, Helvetica, sans-serif"> 
                                          <font size="2" face="Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF">Fig. 
                                          5</font></strong><font color="#FFFFFF"> 
                                          -<font color="#FF9900"> <strong>Reaction</strong></font> 
                                          Module - </font></font></font><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><em>Table 
                                          Window</em> <br>
                                          Cu-O<sub>2</sub>-Cu<sub>2</sub>O system. 
                                          Calculation of thermodynamic values 
                                          by the interactive spreadsheet format.</font> 
                                        </center></td>
                                    </tr>
                                    <tr> 
                                      <td><center>
                                          <font size="2" face="Arial, Helvetica, sans-serif"> 
                                          <a href="javascript:popup(&#39;fig12.jpg&#39;);"><img src="./FactSage.com - Reaction module_files/fig12.jpg" width="620" height="397" border="0"></a><a href="script:popup(%27viewData-ppt83.jpg%27);"> 
                                          <br>
                                          </a> </font> </center></td>
                                    </tr>
                                  </tbody></table></td>
                              </tr>
                              <tr> 
                                <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="1" cellpadding="0">
                                    <tbody><tr> 
                                      <td height="30" bgcolor="#003366"> <center>
                                          <font size="2" face="Arial, Helvetica, sans-serif"> 
                                          <font size="2" face="Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF">Fig. 
                                          6</font></strong><font color="#FFFFFF"> 
                                          -<font color="#FF9900"> <strong>Reaction</strong></font> 
                                          Module - </font></font></font><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Heating 
                                          Al: setting the graphical display with 
                                          Figure.</font> </center></td>
                                    </tr>
                                    <tr> 
                                      <td><center>
                                          <font size="2" face="Arial, Helvetica, sans-serif"> 
                                          <a href="javascript:popup(&#39;Reaction-ppt62.jpg&#39;);"><img src="./FactSage.com - Reaction module_files/Reaction-ppt62_s.jpg" width="600" height="385" border="0"></a><a href="script:popup(%27viewData-ppt83.jpg%27);"> 
                                          <br>
                                          </a> </font> </center></td>
                                    </tr>
                                  </tbody></table></td>
                              </tr>
                              <tr> 
                                <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="1" cellpadding="0">
                                    <tbody><tr> 
                                      <td height="30" bgcolor="#003366"> <center>
                                          <font size="2" face="Arial, Helvetica, sans-serif"> 
                                          <font size="2" face="Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF">Fig. 
                                          7</font></strong><font color="#FFFFFF"> 
                                          -<font color="#FF9900"> <strong>Reaction</strong></font> 
                                          Module - </font></font></font><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Heating 
                                          Al: a few thermodynamical considerations.</font> 
                                        </center></td>
                                    </tr>
                                    <tr> 
                                      <td><center>
                                          <font size="2" face="Arial, Helvetica, sans-serif"> 
                                          <a href="javascript:popup(&#39;Reaction-ppt63.jpg&#39;);"><img src="./FactSage.com - Reaction module_files/Reaction-ppt63_s.jpg" width="600" height="384" border="0"></a><a href="script:popup(%27viewData-ppt83.jpg%27);"> 
                                          <br>
                                          </a> </font> </center></td>
                                    </tr>
                                  </tbody></table></td>
                              </tr>
                              <tr> 
                                <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="1" cellpadding="0">
                                    <tbody><tr> 
                                      <td height="30" bgcolor="#003366"> <center>
                                          <font size="2" face="Arial, Helvetica, sans-serif"> 
                                          <font size="2" face="Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF">Fig. 
                                          8</font></strong><font color="#FFFFFF"> 
                                          -<font color="#FF9900"> <strong>Reaction</strong></font> 
                                          Module - </font></font></font><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Combustion 
                                          of methane in excess &lt;Alpha&gt; O<sub>2</sub> 
                                          - adiabatic reactions.</font> </center></td>
                                    </tr>
                                    <tr> 
                                      <td><center>
                                          <font size="2" face="Arial, Helvetica, sans-serif"> 
                                          <a href="javascript:popup(&#39;Reaction-ppt82.jpg&#39;);"><img src="./FactSage.com - Reaction module_files/Reaction-ppt82_s.jpg" width="600" height="391" border="0"></a><a href="script:popup(%27viewData-ppt83.jpg%27);"> 
                                          <br>
                                          </a> </font> </center></td>
                                    </tr>
                                  </tbody></table></td>
                              </tr>
                              <tr> 
                                <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="1" cellpadding="0">
                                    <tbody><tr> 
                                      <td height="30" bgcolor="#003366"> <center>
                                          <font size="2" face="Arial, Helvetica, sans-serif"> 
                                          <font size="2" face="Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF">Fig. 
                                          9</font></strong><font color="#FFFFFF"> 
                                          -<font color="#FF9900"> <strong>Reaction</strong></font> 
                                          Module - </font></font></font><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Effect 
                                          of high pressure on the graphite to 
                                          diamond transition.</font> 
                                        </center></td>
                                    </tr>
                                    <tr> 
                                      <td><center>
                                          <font size="2" face="Arial, Helvetica, sans-serif"> 
                                          <a href="javascript:popup(&#39;Reaction-ppt112.jpg&#39;);"><img src="./FactSage.com - Reaction module_files/Reaction-ppt112_s.jpg" width="600" height="385" border="0"></a><a href="script:popup(%27viewData-ppt83.jpg%27);"> 
                                          <br>
                                          </a> </font> </center></td>
                                    </tr>
                                  </tbody></table></td>
                              </tr>
                              <tr>
                                <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="1" cellpadding="0">
                                    <tbody><tr> 
                                      <td height="30" bgcolor="#003366"> <center>
                                          <font size="2" face="Arial, Helvetica, sans-serif"> 
                                          <font size="2" face="Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF">Fig. 
                                          10</font></strong><font color="#FFFFFF"> 
                                          -<font color="#FF9900"> <strong>Reaction</strong></font> 
                                          Module - </font></font></font><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Thermal 
                                          balance for leaching of zinc oxide.</font> 
                                        </center></td>
                                    </tr>
                                    <tr> 
                                      <td><center>
                                          <font size="2" face="Arial, Helvetica, sans-serif"> 
                                          <a href="javascript:popup(&#39;Reaction-ppt102.jpg&#39;);"><img src="./FactSage.com - Reaction module_files/Reaction-ppt102_s.jpg" width="600" height="389" border="0"></a><a href="script:popup(%27viewData-ppt83.jpg%27);"> 
                                          <br>
                                          </a> </font> </center></td>
                                    </tr>
                                  </tbody></table></td>
                              </tr>
                            </tbody></table></td>
                        </tr>
                      </tbody></table>
                      <p><font size="2" face="Arial, Helvetica, sans-serif"><br>
                        </font></p>
                      </div>
                    <div align="justify"></div></td>
                </tr>
              </tbody></table>
              
            </center></td>
        </tr>
      </tbody></table></td>
  </tr>
</tbody></table>
 
<table width="580" border="0" align="center" cellpadding="1" cellspacing="0" bgcolor="#666666">
  <tbody><tr> 
    <td width="33%"><font color="#FFFFFF" size="1" face="Trebuchet MS, Arial">© 
      <a href="mailto:crct@polymtl.ca"><font color="#FFFFFF">CRCT</font></a> 2006-2017 
      - <a href="http://www.factsage.com/"><font color="#FFFFFF">www.factsage.com</font></a></font></td>
	  
    <td>
      <!-- Start of StatCounter Code -->
      <div align="center">
        <script type="text/javascript" language="javascript">
var sc_project=520806; 
var sc_partition=3; 
</script>
        <script type="text/javascript" language="javascript" src="./FactSage.com - Reaction module_files/counter.js"></script><span class="statcounter"><a class="statcounter" href="http://www.statcounter.com/" target="_blank"><img src="./FactSage.com - Reaction module_files/t.php" alt="StatCounter - Free Web Tracker and Counter" border="0"></a></span>

        <noscript>
        &lt;a href="http://www.statcounter.com/" target="_blank"&gt;&lt;img  src="http://c4.statcounter.com/counter.php?sc_project=520806&amp;amp;java=0" alt="free web hit counter" border="0"&gt;&lt;/a&gt; 
        </noscript>
        <!-- End of StatCounter Code -->
      </div></td>
    <td width="33%">
<div align="right"><font color="#FFFFFF" size="1" face="Trebuchet MS, Arial">Modified : December 4, 2010 </font></div></td>
  </tr>
</tbody></table>
<font face="Trebuchet MS, Arial"> 
</font><p align="center">&nbsp; </p>


</body></html>