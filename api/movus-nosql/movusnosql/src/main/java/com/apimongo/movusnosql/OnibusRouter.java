package com.apimongo.movusnosql;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.http.MediaType;
import org.springframework.web.reactive.function.server.RequestPredicates;
import org.springframework.web.reactive.function.server.RouterFunction;
import org.springframework.web.reactive.function.server.RouterFunctions;
import org.springframework.web.reactive.function.server.ServerResponse;

//@Configuration
public class OnibusRouter {
	
	@Bean
	public RouterFunction<ServerResponse> route(OnibusHandler handler) {
		return RouterFunctions
				.route()
				.GET("/onibus", RequestPredicates.accept(MediaType.APPLICATION_JSON), handler::findAll)
				.GET("/onibus/{id}", RequestPredicates.accept(MediaType.APPLICATION_JSON), handler::findById)
				.POST("/onibus", RequestPredicates.accept(MediaType.APPLICATION_JSON), handler::save)			
				.build();
	}

}
