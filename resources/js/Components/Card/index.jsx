import styled from "styled-components";
const CardWrapper = styled.div`
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    width: 400px;
    transition: 900ms;
    overflow: hidden;
    &:hover {
        cursor: pointer;
        .image {
            transform: scale(1.5);
        }
        .label {
            color: red;
        }
        box-shadow: 2px 2px 10px #e2e3e9;
    }
`;

const CardLabel = styled.span`
    color: black;
    font-size: 29px;
    font-weight: bold;
`;

const CardImage = styled.img`
    transition: transform 0.3s ease;
    max-width: 100%;
    align-self: center;
`;

const CardDate = styled.span`
    margin-left: 4px;
    color: red;
`;

const CardLocal = styled.span`
    margin-left: 6px;
    color: black;
`;

const CardLogoCalendar = styled.img`
    margin-right: 5px;
    width: 4%;
`;

const CardLogoLocal = styled.img`
    width: 4%;
`;

const CardDiv = styled.div`
    display: flex;
    overflow: hidden;
`;

const CardTrait = styled.div`
    border-top: 1px solid black;
    width: 30px;
    margin-top: 5px;
    margin-bottom: 5px;
`;

function Card({ label, picture, concert_halls }) {
    return (
        <CardWrapper>
            <CardDiv>
                <CardImage className="image" src={picture} alt="image" />
            </CardDiv>
            <CardLabel className="label">{label}</CardLabel>
            <CardTrait />
            {concert_halls.map((concert_hall) => (
                <>
                    <CardDiv>
                        <CardLogoCalendar
                            src={
                                "https://www.normandie.fr/profiles/createur_profil/themes/createur/dist/images/list-calendaricon.svg"
                            }
                        />
                        <CardDate>{concert_hall.date}</CardDate>
                    </CardDiv>
                    <CardDiv>
                        <CardLogoLocal
                            src={
                                "https://www.normandie.fr/profiles/createur_profil/themes/createur/dist/images/location-pinb.svg"
                            }
                        />
                        <CardLocal>
                            {concert_hall.city.city}, {concert_hall.city.zip}
                        </CardLocal>
                    </CardDiv>
                </>
            ))}
        </CardWrapper>
    );
}

export default Card;
