# Sistema de Votação de Chapas para Grêmio Estudantil
<p>
Uma urna eleitoral para realizar a automação segura e exata dos procedimentos de votação de chapas
de grêmio estudantil.
</p>

<h1>Versão 1.0</h1>
<p>A priori, a única versão do sistema. Projetada para as 
eleições 2015 do Grêmio Estudantil Paulo Freire (Instituto Federal de Educação, Ciência e Tecnologia
do Rio Grande do Norte, Campus Natal - Zona Norte).  Desenvolvida a pedido e orientação do 
presidente do Comitê Eleitoral da eleição supracitada, Edmilson Maria Soares Filho. 
Esta versão, contudo, foi documentada e feita para ser melhorada e reutilizada em quaisquer 
situações, requerendo pouquíssimas alterações no código. Inclusive,
uma versão modificada (apenas textualmente) pelos próprios desenvolvedores foi usada para a eleição dos
delegados do mesmo campus para o 41º Congresso Nacional da União Brasileira dos Estudantes Secundaristas.</p>

<h2>Segurança nativa</h2>
<p>Técnicas básicas de segurança anti-hacking foram implementadas de modo que, se as 
recomendações (próximo tópico) fossem bem seguidas, se tornaria quase impossível
a fraude eleitoral (a exceções listadas mais para frente deste texto).</p>
<p>Por exemplo, o sistema permite que só o mouse seja usado pelo eleitor, de modo que
seja dificultado consideravelmente a tentativa de SQL e script injection. Mesmo assim,
foi considerada a possibilidade de escrita prévia de código e utilização de teclado virtual, 
então tentativas simples para proteção anti-injection foram tomadas durante o código. Também
foi tida atenção à possível situação de alguém tentar votar mais de uma vez, o que não é permitido.</p>
<p>Em caso de falha do próprio sistema, é viável que seja feita uma espécie de auditoria futura,
até mesmo pelos próprios eleitores, uma vez que o código armazena suas matrículas.
Entretanto este recurso deve ser utilizado com extrema cautela (e disponibilizado de
forma temporária, como poucas horas, dias) ou até mesmo descartado, isso porque acima de tudo o processo
eleitoral deve ser democrático e incorrompível por quaisquer reações que a quebra de 
sigilo do voto possa causar.</p>

<h2>Recomendações de segurança estrutural</h2>
<p>Os desenvolvedores esperam que os membros do Comitê Eleitoral sejam íntegros, zelosos e de boa fé, já que lhes
foram atribuídas responsabilidades democráticas de extremo peso, para executar as devidas
recomendações, pois são consideradas as mais importantes para a segurança e integridade do processo eleitoral.</p>
<h4>Antes e durante as votações</h4>
<ul>
<li>O computador (hardware e software), código e elementos correlatos da Informática devem ser revisados
pelos servidores do setor de TI do campus acompanhados
do membros do Comitê Eleitoral e/ou outros interessados conhecedores da área (preferencialmente os próprios
desenvolvedores);</li>
<li>Preferencialmente apenas o presidente do Comitê (e/ou um servidor do setor de TI) deve ter as senhas de acesso
do computador (a saber, toda e qualquer senha, incluindo a do banco de dados, boot, manutenção, BIOS, super 
usuário etc);</li>
<li>Apenas opera o computador o eleitor e os membros do Comitê e somente para utilização do navegador rodando
do sistema, a exceção de quando necessária for uma manutenção emergencial por parte dos servidores autorizados;</li>
<li>Todas as etapas deve ser transparentes, a exceção do voto individual;</li>
<li>O computador dê saída de vídeo a dois pares de mouse e monitor (um par oculto para eleitores, outro público
para o Comitê) com recurso de "tela dividida";</li>
<li>Ninguém além dos membros do Comitê Eleitoral utilizam o teclado;</li>
<li>Um eleitor não deve demorar mais que vinte segundos utilizando a tela (e mouse) individual e ultrapassado esse
limite, um membro do Comitê deve ajudá-lo de longe (zelando pelo sigilo);</li>
<li>Que a equipe de segurança (que pode ser o próprio Comitê) retire à força qualquer pessoa do ambiente caso seja
preciso evitar uma potencial fraude;</li>
<li>O gabinete do computador deve estar em posição 100% visível, em especial entradas e cabeamento;</li>
<li>O sistema independe de conexão à Internet, que não deve ser utilizada até que os resultados sejam apurados;</li>
<li>Preferencialmente todo, ou no mínimo dois, membros do Comitê presentes simultaneamente;</li>
<li>Nenhum cabo ou plug (and play) extra deve ser conectado por ninguém na placa-mãe do computador;</li>
<li>Utilização de equipamentos de proteção, como no-break e sistemas de backup, para evitar que os
dados se percam por motivos adversos (como queda abrupta de energia).</li>
</ul>
<h4>Após as votações</h4>
<ul>
<li>Resultados exibidos publicamente na tela antes da retirada do computador e
preferencialmente impressos numa segunda via;</li>
<li>O fim que o banco de dados terá é decidido pelo Comitê Eleitoral, mas recomenda-se seu descarte brevemente;</li>
<li>Se for decidido por ser mantido guardado para consultas futuras, que seja em local totalmente seguro de modo
que o acesso seja controlado e individual (isto é, ninguém veja seu voto além dele próprio), sendo descartado em
breve;</li>
<li>Quem duvidar do processo, que se manifeste antes do descarte ou se cale para sempre (de qualquer forma,
a decisão sobre destino do banco de dados permanece a cargo do Comitê);</li>
<li>O armazenamento utilizado (provavelmente disco rígido) deve ser guardado, após devidamente apagado o banco de
dados, de forma segura (se possível, destruído) de forma que ninguém possa acessá-lo posteriormente para 
consulta não autorizada.</li>
</ul>

<h2>Riscos ao sistema</h2>
<p>Uma vez que as recomendações fossem bem seguidas, as únicas formas de fraude 
seriam relacionadas ao Comitê Eleitoral, que é basicamente responsável pela segurança do processo.
<ul>
<li>Coerção por parte (de improbidade) administrativa superior ao Comitê;</li>
<li>Ameaças à integridade e psicológica de seus membros;</li>
<li>Corrompimento de (quase?) todos os membros do Comitê e testemunhas por motivo qualquer;</li>
<li>Destruição fatal ou comprometimento do sistema (isto é: código, computador e equipamentos correlatos)
fora do previsto.</li>
</ul>
</p>

<h2>Licenças</h2>
<p>Foi utilizada a <a href="https://opensource.org/licenses/MIT">MIT License (MIT)</a> para todos os códigos aqui abertos. Clique abaixo para ver as cópias...<br/>
<ul>
<li><a href="LICENSE.md">deste sistema.</a></li>
<li><a href="http://getbootstrap.com/getting-started/#license-faqs">do framework Twitter Bootstrap.</a></li>
</ul>
</p>
