package com.example.eventbooking.api;

import com.example.eventbooking.model.Event;
import com.example.eventbooking.repository.EventRepository;
import com.fasterxml.jackson.databind.ObjectMapper;
import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Test;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.test.autoconfigure.web.servlet.AutoConfigureMockMvc;
import org.springframework.boot.test.context.SpringBootTest;
import org.springframework.http.MediaType;
import org.springframework.test.web.servlet.MockMvc;

import static org.springframework.test.web.servlet.request.MockMvcRequestBuilders.*;
import static org.springframework.test.web.servlet.result.MockMvcResultMatchers.*;

@SpringBootTest
@AutoConfigureMockMvc
public class EventControllerIntegrationTest {

    @Autowired
    private MockMvc mockMvc;

    @Autowired
    private EventRepository eventRepository;

    @Autowired
    private ObjectMapper objectMapper;

    @BeforeEach
    void setup() {
        eventRepository.deleteAll();
    }

    @Test
    void shouldCreateEvent() throws Exception {
        Event event = new Event(null, "Spring Conference", "2025-05-01", 50);

        mockMvc.perform(post("/api/events")
                .contentType(MediaType.APPLICATION_JSON)
                .content(objectMapper.writeValueAsString(event)))
                .andExpect(status().isOk())
                .andExpect(jsonPath("$.name").value("Spring Conference"));
    }

    @Test
    void shouldFetchAllEvents() throws Exception {
        eventRepository.save(new Event(null, "Tech Expo", "2025-06-10", 100));

        mockMvc.perform(get("/api/events"))
                .andExpect(status().isOk())
                .andExpect(jsonPath("$[0].name").value("Tech Expo"));
    }

    @Test
    void shouldUpdateEvent() throws Exception {
        Event event = eventRepository.save(new Event(null, "Music Fest", "2025-07-15", 300));
        event.setName("Music Festival");

        mockMvc.perform(put("/api/events/" + event.getId())
                .contentType(MediaType.APPLICATION_JSON)
                .content(objectMapper.writeValueAsString(event)))
                .andExpect(status().isOk())
                .andExpect(jsonPath("$.name").value("Music Festival"));
    }
}
