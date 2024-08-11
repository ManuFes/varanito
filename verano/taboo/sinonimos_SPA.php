<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Sinónimos</title>
    <script>
        // Aquí cargaremos los sinónimos en JavaScript
        const sinonimos_SPA = {
            "amor": ["afecto", "pasión", "adoración"],
            "bello": ["carino", "afascinante", "gradevole"],
            "esperanza": ["expectativa", "ilusión", "espera"],
            "feliz": ["contento", "alegre", "gozoso"],
            "triste": ["infeliz", "melancólico", "deprimido"],
            "fuerza": ["vigor", "potencia", "energía"],
            "miedo": ["temor", "terror", "ansiedad"],
            "vida": ["existencia", "alma", "esencia"],
            "muerte": ["deceso", "fin", "tránsito"],
            "día": ["diurno", "luz", "aurora"],
            "noche": ["oscuridad", "tinieblas", "sombra"],
            "felicidad": ["alegría", "regocijo", "beatitud"],
            "dolor": ["sufrimiento", "pena", "tormento"],
            "paz": ["tranquilidad", "serenidad", "calma"],
            "guerra": ["conflicto", "batalla", "lucha"],
            "amigo": ["compañero", "colega", "aliado"],
            "enemigo": ["adversario", "rival", "opositor"],
            "cariñoso": ["afectuoso", "amable", "atento"],
            "odio": ["rencor", "antipatía", "desprecio"],
            "calor": ["ardor", "torrido", "sofocante"],
            "frío": ["gélido", "glacial", "helado"],
            "rico": ["acomodado", "opulento", "próspero"],
            "pobre": ["necesitado", "indigente", "miserable"],
            "rápido": ["veloz", "ligero", "expedito"],
            "lento": ["tardo", "perezoso", "indolente"],
            "malo": ["malvado", "cruel", "despiadado"],
            "fuerte": ["robusto", "vigoroso", "poderoso"],
            "débil": ["frágil", "endeble", "tenue"],
            "coraje": ["valentía", "audacia", "osadía"],
            "éxito": ["triunfo", "victoria", "realización"],
            "fracaso": ["derrota", "revés", "desastre"],
            "libertad": ["independencia", "autonomía", "emancipación"],
            "prisión": ["encarcelamiento", "reclusión", "detención"],
            "inteligente": ["listo", "sagaz", "astuto"],
            "tonto": ["idiota", "necio", "imbécil"],
            "joven": ["adolescente", "chico", "muchacho"],
            "viejo": ["anciano", "mayor", "maduro"],
            "hermoso": ["atractivo", "encantador", "espléndido"],
            "feo": ["desagradable", "horrible", "desagradable"],
            "rápido": ["fulgurante", "instantáneo", "relámpago"],
            "lento": ["retardado", "perezoso", "sosegado"],
            "fuerza": ["poder", "ímpetu", "intensidad"],
            "dolor": ["angustia", "aflicción", "laceración"],
            "odio": ["repulsión", "antipatía", "desprecio"],
            "libertad": ["independencia", "autonomía", "emancipación"],
            "prisión": ["encarcelamiento", "reclusión", "detención"],
            "éxito": ["logro", "prosperidad", "avance"],
            "fracaso": ["desmoronamiento", "ruina", "colapso"],
            "día": ["mañana", "amanecer", "jornada"],
            "noche": ["crepúsculo", "oscuridad", "tinieblas"]
        };

        const sinonimos_ITA = {
            "amore": ["affetto", "passione", "adorazione"],
            "bello": ["carino", "affascinante", "gradevole"],
            "speranza": ["aspettativa", "illusione", "attesa"],
            "felice": ["contento", "allegro", "gioioso"],
            "triste": ["infelice", "malinconico", "depresso"],
            "forza": ["vigore", "potenza", "energia"],
            "paura": ["timore", "terrore", "ansia"],
            "vita": ["esistenza", "anima", "essenza"],
            "morte": ["decesso", "fine", "trapasso"],
            "giorno": ["diurno", "luce", "aurora"],
            "notte": ["oscurità", "tenebra", "buio"],
            "felicità": ["gioia", "allegria", "beatitudine"],
            "dolore": ["sofferenza", "pena", "tormento"],
            "pace": ["tranquillità", "serenità", "calma"],
            "guerra": ["conflitto", "battaglia", "lotta"],
            "amico": ["compagno", "collega", "alleato"],
            "nemico": ["avversario", "rivale", "oppositore"],
            "amorevole": ["affettuoso", "gentile", "premuroso"],
            "odio": ["rancore", "antipatia", "disprezzo"],
            "caldo": ["bollente", "torrido", "afoso"],
            "freddo": ["gelido", "glaciale", "rigido"],
            "ricco": ["benestante", "facoltoso", "agiato"],
            "povero": ["indigente", "bisognoso", "miserabile"],
            "veloce": ["rapido", "svelto", "celere"],
            "lento": ["tardo", "pigro", "indolente"],
            "cattivo": ["malvagio", "crudele", "spietato"],
            "forte": ["robusto", "vigoroso", "potente"],
            "debole": ["fragile", "esile", "tenue"],
            "coraggio": ["audacia", "valore", "ardimento"],
            "successo": ["trionfo", "vittoria", "realizzazione"],
            "fallimento": ["sconfitta", "insuccesso", "disastro"],
            "libertà": ["indipendenza", "autonomia", "emancipazione"],
            "prigionia": ["detenzione", "reclusione", "incarcerazione"],
            "intelligente": ["astuto", "sagace", "acuto"],
            "stupido": ["idiota", "sciocco", "imbecille"],
            "giovane": ["adolescente", "ragazzo", "fanciullo"],
            "anziano": ["vecchio", "adulto", "maturo"],
            "brutto": ["sgradevole", "orrendo", "spiacevole"],
            "felice": ["lieto", "raggiante", "euforico"],
            "paura": ["inquietudine", "sospetto", "preoccupazione"],
            "freddo": ["brivido", "frigido", "algido"],
            "ricco": ["lussuoso", "opulento", "magnate"],
            "lento": ["ritardato", "languido", "ponderato"],
            "forza": ["energia", "grinta", "intensità"],
            "triste": ["affranto", "lacrimoso", "addolorato"],
            "caldo": ["scottante", "infuocato", "ardente"],
            "amore": ["tenerezza", "dedizione", "passione"],
            "bello": ["radioso", "incantevole", "meraviglioso"],
            "guerra": ["ostilità", "assedio"],
            "pace": ["armonia", "accordo", "serenità"],
            "amico": ["confidente", "compagno"],
            "nemico": ["antagonista", "ostile", "detrattore"],
            "veloce": ["fulmineo", "istantaneo", "celere"],
            "lento": ["ritardatario", "ponderato"],
            "coraggio": ["temerarietà", "valoroso"],
            "intelligente": ["saggio", "intuitivo", "brillante"],
            "stupido": ["cretino", "ottuso", "stolto"],
            "giovane": ["bambino", "infante", "giovincello"],
            "anziano": ["senior", "veterano", "geriatrico"],
            "forte": ["tenace", "resistente", "possente"],
            "debole": ["esitante", "vacillante", "vulnerabile"],
            "dolore": ["agonia", "patimento", "lacerazione"],
            "odio": ["avversione", "disgusto", "repulsione"],
            "libertà": ["autonomia", "licenza", "scioltezza"],
            "prigionia": ["carcere", "segregazione", "incatenamento"],
            "successo": ["prosperità", "avanzamento", "progresso"],
            "fallimento": ["caduta", "disfatta", "rovina"],
            "giorno": ["mattino", "aurora", "diurno"],
            "notte": ["crepuscolo", "oscurità", "tenebra"]
        };


        function buscarSinonimos() {
            const palabra = document.getElementById("palabra").value.toLowerCase();
            const idioma = new URLSearchParams(window.location.search).get("idioma");
            let sinonimos = [];

            if (idioma === "SPA") {
                sinonimos = sinonimos_SPA[palabra] || [];
            } else if (idioma === "ITA") {
                sinonimos = sinonimos_ITA[palabra] || [];
            }

            const resultadoDiv = document.getElementById("resultado");
            if (sinonimos.length > 0) {
                resultadoDiv.innerHTML = `<p>Sinónimos de '${palabra}':</p><ul>` +
                    sinonimos.map(s => `<li>${s}</li>`).join('') + '</ul>';
            } else {
                resultadoDiv.innerHTML = `<p>No se encontraron sinónimos o la palabra no está en el archivo.</p>`;
            }
        }
    </script>
</head>

<body>
    <h1>Buscar Sinónimos</h1>
    <form onsubmit="buscarSinonimos(); return false;">
        <label for="palabra">Introduce una palabra: </label>
        <input type="text" id="palabra" name="palabra" required>
        <button type="submit">Buscar</button>
    </form>
    <div id="resultado"></div>
</body>

</html>