package com.apimongo.movusnosql.document;

import org.springframework.data.annotation.Id;

public class Onibus {
	
	@Id
	private String id;
	
	private String latitude;
	
	private String longitude;
	
	private String rua;

	private double valorPassagem;
	
	private int qtdPassageiros;
	
	
	

	public Onibus() {

	}

	public Onibus(String id, String latitude, String longitude, String rua, double valorPassagem, int qtdPassageiros) {
		super();
		this.id = id;
		this.latitude = latitude;
		this.longitude = longitude;
		this.rua = rua;
		this.valorPassagem = valorPassagem;
		this.qtdPassageiros = qtdPassageiros;
	}

	public String getId() {
		return id;
	}

	public void setId(String id) {
		this.id = id;
	}

	public String getLatitude() {
		return latitude;
	}

	public void setLatitude(String latitude) {
		this.latitude = latitude;
	}

	public String getLongitude() {
		return longitude;
	}

	public void setLongitude(String longitude) {
		this.longitude = longitude;
	}

	public String getRua() {
		return rua;
	}

	public void setRua(String rua) {
		this.rua = rua;
	}

	public double getValorPassagem() {
		return valorPassagem;
	}

	public void setValorPassagem(double valorPassagem) {
		this.valorPassagem = valorPassagem;
	}

	public int getQtdPassageiros() {
		return qtdPassageiros;
	}

	public void setQtdPassageiros(int qtdPassageiros) {
		this.qtdPassageiros = qtdPassageiros;
	}
	
	
}
