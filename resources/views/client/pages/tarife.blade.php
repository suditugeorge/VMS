@extends('client.layout')

@section('title', 'Despre noi')

@section('content')
    @include('client.components.company-description')
    <div class="wrapper">
        <div class="section section-about-us">
            <div class="container">
                <div class="content-center text-center">
                    <h1>Tarife</h1>
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Tip interventie</th>
                        <th>Preț</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Consultație junior</td>
                        <td>30 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Consultație de specialitate</td>
                        <td>50 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Vidare glande perianale</td>
                        <td>15 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Tăiat unghii</td>
                        <td>10-20 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Toaletă urechi</td>
                        <td>15-30 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Tratamente intercurente / Perfuzii</td>
                        <td>35-150 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Bandaje</td>
                        <td>30-40 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Bandaje ghipsate</td>
                        <td>60-150 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>Sondaj uretral</td>
                        <td>50-80 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Clismă</td>
                        <td>40-50 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td>Intervenții mică chirurgie</td>
                        <td>60-140 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">12</th>
                        <td>Vaccinări</td>
                        <td>30-120 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">13</th>
                        <td>Deplasări la domiciliu</td>
                        <td>100 lei/ora</td>
                    </tr>
                    <tr>
                        <th scope="row">14</th>
                        <td>Examen microscopic babesioză</td>
                        <td>50 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">15</th>
                        <td>Examen microscopic parazitologic (raclaj dermic, probă auriculară)</td>
                        <td>40 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">16</th>
                        <td>Examen bacteriologic</td>
                        <td>80 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">17</th>
                        <td>Examen micologic</td>
                        <td>80 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">18</th>
                        <td>Antiobiogramă</td>
                        <td>20 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">19</th>
                        <td>Examen coproparazitologic</td>
                        <td>70 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">20</th>
                        <td>Examen biochimic urină</td>
                        <td>30 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">21</th>
                        <td>Sediment urinar</td>
                        <td>30 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">22</th>
                        <td>Analize biochimice sânge</td>
                        <td>15 lei/parametru + 15 lei recoltare</td>
                    </tr>
                    <tr>
                        <th scope="row">23</th>
                        <td>Hemoleucogramă</td>
                        <td>80 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">24</th>
                        <td>Ecografie</td>
                        <td>120 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">25</th>
                        <td>EKG</td>
                        <td>65 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">26</th>
                        <td>Monitorizare funcţii vitale</td>
                        <td>25 lei/ora</td>
                    </tr>
                    <tr>
                        <th scope="row">27</th>
                        <td>Ablaţii tumori mamare</td>
                        <td>350-600 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">28</th>
                        <td>Sterilizări femele canide <10 kg</td>
                        <td>250 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">29</th>
                        <td>Sterilizări femele canide 10-20 kg</td>
                        <td>300 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">30</th>
                        <td>Sterilizări femele canide 20-30 kg</td>
                        <td>350 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">31</th>
                        <td>Sterilizări femele canide >30 kg</td>
                        <td>400 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">32</th>
                        <td>Sterilizări femele feline</td>
                        <td>150 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">33</th>
                        <td>Sterilizări masculi canide <10 kg</td>
                        <td>200 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">34</th>
                        <td>Sterilizări masculi canide 10-20 kg</td>
                        <td>250 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">35</th>
                        <td>Sterilizări masculi canide 20-30 kg</td>
                        <td>280 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">36</th>
                        <td>Sterilizări masculi canide >30 kg</td>
                        <td>320 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">37</th>
                        <td>Sterilizări masculi feline</td>
                        <td>140 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">38</th>
                        <td>Gastrotomii, Enterotomii, Gastroectomii, Enterectomii</td>
                        <td>500-600 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">39</th>
                        <td>Hernii diafragmatice</td>
                        <td>700-1000 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">40</th>
                        <td>Osteosinteze</td>
                        <td>800-1200 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">41</th>
                        <td>Cistotomii, Cistectomii, Uretrostome</td>
                        <td>400-800 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">42</th>
                        <td>Amputare membru</td>
                        <td>450-600 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">43</th>
                        <td>Detartraj (30 minute)</td>
                        <td>140 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">44</th>
                        <td>Operatii pe globul ocular</td>
                        <td>300-550 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">45</th>
                        <td>Hernii ombilicale, ingvinale</td>
                        <td>250-800 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">46</th>
                        <td>Administrare comprimat oral, pipeta spot-on, haina contentie</td>
                        <td>5 lei</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="container">
                <div class="alert alert-warning" role="alert">
                    <div class="container d-flex">
                        <div class="alert-icon price-alert align-self-center">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                        </div>
                        <div>
                            <strong>Notă!</strong> In preturile interventiilor chirurgicale nu sunt incluse tratamentul postoperator, anestezia cu antidot si firele resorbabile la sutura pielii.
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Tip interventie</th>
                        <th>Preț</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">47</th>
                        <td>Tuns <5 kg</td>
                        <td>75 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">48</th>
                        <td>Tuns 5-10 kg </td>
                        <td>80 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">49</th>
                        <td>Tuns 10-25 kg</td>
                        <td>100-120 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">50</th>
                        <td>Tuns >25 kg</td>
                        <td>140-250 lei</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="container">
                <div class="alert alert-warning" role="alert">
                    <div class="container d-flex">
                        <div class="alert-icon price-alert align-self-center">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                        </div>
                        <div>
                            <strong>Notă!</strong> Pretul tunsului oscileaza in functie de  temperamentul animalului si de starea de intretinere a blanii.
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Tip interventie</th>
                        <th>Preț</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">51</th>
                        <td>Spălat <5 kg</td>
                        <td>40 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">52</th>
                        <td>Spălat 5-10 kg </td>
                        <td>50 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">53</th>
                        <td>Spălat 10-15 kg</td>
                        <td>60 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">54</th>
                        <td>Spălat 15-20 kg</td>
                        <td>65 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">55</th>
                        <td>Spălat 20-25 kg</td>
                        <td>70 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">56</th>
                        <td>Spălat 25-30 kg</td>
                        <td>80 lei</td>
                    </tr>
                    <tr>
                        <th scope="row">57</th>
                        <td>Spălat 30-35 kg</td>
                        <td>75 lei</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection
