import { Link, Head } from "@inertiajs/react";
import styled from "styled-components";

export default function Edit({ event }) {
    function obtenirHeureEtDate(dateString) {
        // Convertir la chaîne en objet Date
        const dateObj = new Date(dateString);

        // Extraire l'heure et la date
        const heure = dateObj.toLocaleTimeString("fr-FR", { hour12: false });
        const date = dateObj.toLocaleDateString("fr-FR");

        // Retourner l'heure et la date sous forme d'objet
        return { heure, date };
    }

    // Test de la fonction
    const dateTimeString = event.updated_at;
    const { heure, date } = obtenirHeureEtDate(dateTimeString);

    const EditContainer = styled.div`
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        overflow: hidden;
        align-items: center;
    `;

    const EditTitle = styled.h5`
        color: black;
        font-size: 30px;
    `;

    const CardTrait = styled.div`
        border-top: 1px solid black;
        width: 30px;
        margin-top: 5px;
        margin-bottom: 5px;
    `;

    const CardLogoCalendar = styled.img`
        margin-right: 5px;
        width: 2%;
    `;

    const EditText = styled.a``;

    const CardDiv = styled.div`
        display: flex;
        flex-direction: column;
        overflow: hidden;
        align-items: center;
    `;

    const EditDivCadre = styled.div`
        display: flex;
        border-top: 1px solid black;
        border-bottom: 1px solid black;
    `;

    const CardLogoLocal = styled.img`
        width: 4%;
    `;

    const CardLocal = styled.span`
        margin-left: 6px;
        color: black;
    `;

    const CardDate = styled.span`
        margin-left: 4px;
        color: red;
    `;

    const CardImage = styled.img`
        max-width: 40%;
        align-self: center;
    `;

    https: console.log(event);
    return (
        <EditContainer>
            <EditTitle>{event.label}</EditTitle>
            <CardTrait />
            <CardDiv>
                <CardLogoCalendar
                    src={
                        "//www.normandie.fr/profiles/createur_profil/themes/createur/dist/images/clock-time.svg"
                    }
                />
                <EditText>
                    Mise à jour le {date} à {heure}
                </EditText>
                <EditDivCadre>
                    {event.concert_halls.map((concert_hall) => (
                        <>
                            <CardLogoCalendar
                                src={
                                    "https://www.normandie.fr/profiles/createur_profil/themes/createur/dist/images/list-calendaricon.svg"
                                }
                            />
                            <CardDate>{concert_hall.date}</CardDate>
                            <CardLocal>
                                {concert_hall.city.city},{" "}
                                {concert_hall.city.zip}
                            </CardLocal>
                            <CardLogoLocal
                                src={
                                    "https://www.normandie.fr/profiles/createur_profil/themes/createur/dist/images/location-pinb.svg"
                                }
                            />
                        </>
                    ))}
                </EditDivCadre>
                <EditText>{event.comment}</EditText>
                <CardDiv>
                    <CardImage
                        className="image"
                        src={event.urlImage}
                        alt="image"
                    />
                </CardDiv>
                <EditText>
                    Nombre de places disponible :{" "}
                    {event.numberPlaces - event.numberPlacesReserved} /{" "}
                    {event.numberPlaces}
                </EditText>
            </CardDiv>
        </EditContainer>
    );
}
