import { Link, Head } from "@inertiajs/react";
import styled from "styled-components";
import Card from "C:/Users/alexa/OneDrive/Bureau/Formation/S9/Reservation-de-spectacles/resources/js/Components/Card/index.jsx";

export default function Welcome({ events }) {
    const CardsContainer = styled.div`
        display: grid;
        gap: 30px;
        overflow: hidden;
        grid-template-rows: 450px 450px;
        grid-template-columns: 1fr 1fr 1fr;
        align-items: center;
        justify-items: center;
        align-items: start; /* align elements at the top of each cell */
    `;

    return (
        <CardsContainer>
            {events.map((event, index) => (
                <Link href={route("event.show", event)}>
                    <Card
                        key={`${event.id}-${index}`}
                        picture={event.urlImage}
                        label={event.label}
                        concert_halls={event.concert_halls}
                    />
                </Link>
            ))}
        </CardsContainer>
    );
}
