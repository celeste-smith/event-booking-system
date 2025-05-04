package com.example.eventbookingapi;

import com.example.eventbookingapi.model.Booking;
import com.example.eventbookingapi.model.Event;
import com.example.eventbookingapi.model.User;
import com.example.eventbookingapi.repository.BookingRepository;
import com.example.eventbookingapi.repository.EventRepository;
import com.example.eventbookingapi.repository.UserRepository;
import com.fasterxml.jackson.databind.ObjectMapper;
import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Test;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.test.autoconfigure.web.servlet.AutoConfigureMockMvc;
import org.springframework.boot.test.context.SpringBootTest;
import org.springframework.http.MediaType;
import org.springframework.test.web.servlet.MockMvc;

import java.util.UUID;

import static org.springframework.test.web.servlet.request.MockMvcRequestBuilders.*;
import static org.springframework.test.web.servlet.result.MockMvcResultMatchers.*;

@SpringBootTest
@AutoConfigureMockMvc
public class BookingControllerIntegrationTest {

    @Autowired
    private MockMvc mockMvc;

    @Autowired
    private ObjectMapper objectMapper;

    @Autowired
    private BookingRepository bookingRepository;

    @Autowired
    private UserRepository userRepository;

    @Autowired
    private EventRepository eventRepository;

    private User user;
    private Event event;

    @BeforeEach
    public void setup() {
        bookingRepository.deleteAll();
        eventRepository.deleteAll();
        userRepository.deleteAll();

        user = new User();
        user.setName("Test User");
        user.setEmail("test@example.com");
        userRepository.save(user);

        event = new Event();
        event.setTitle("Test Event");
        event.setDescription("Event Description");
        event.setCapacity(100);
        eventRepository.save(event);
    }

    @Test
    public void testCreateBookingSuccess() throws Exception {
        Booking booking = new Booking();
        booking.setUserId(user.getId());
        booking.setEventId(event.getId());
        booking.setNumberOfTickets(2);

        mockMvc.perform(post("/api/bookings")
                .contentType(MediaType.APPLICATION_JSON)
                .content(objectMapper.writeValueAsString(booking)))
                .andExpect(status().isOk())
                .andExpect(jsonPath("$.numberOfTickets").value(2));
    }

    @Test
    public void testCreateBookingUserNotFound() throws Exception {
        Booking booking = new Booking();
        booking.setUserId(UUID.randomUUID().toString());
        booking.setEventId(event.getId());
        booking.setNumberOfTickets(1);

        mockMvc.perform(post("/api/bookings")
                .contentType(MediaType.APPLICATION_JSON)
                .content(objectMapper.writeValueAsString(booking)))
                .andExpect(status().isNotFound());
    }

    @Test
    public void testCreateBookingEventNotFound() throws Exception {
        Booking booking = new Booking();
        booking.setUserId(user.getId());
        booking.setEventId(UUID.randomUUID().toString());
        booking.setNumberOfTickets(1);

        mockMvc.perform(post("/api/bookings")
                .contentType(MediaType.APPLICATION_JSON)
                .content(objectMapper.writeValueAsString(booking)))
                .andExpect(status().isNotFound());
    }

    @Test
    public void testCreateBookingExceedsCapacity() throws Exception {
        Booking booking = new Booking();
        booking.setUserId(user.getId());
        booking.setEventId(event.getId());
        booking.setNumberOfTickets(200);

        mockMvc.perform(post("/api/bookings")
                .contentType(MediaType.APPLICATION_JSON)
                .content(objectMapper.writeValueAsString(booking)))
                .andExpect(status().isBadRequest());
    }
}
