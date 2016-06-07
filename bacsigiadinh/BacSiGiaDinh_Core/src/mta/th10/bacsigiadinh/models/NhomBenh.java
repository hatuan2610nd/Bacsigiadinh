package mta.th10.bacsigiadinh.models;

import mta.th10.bacsigiadinh.enums.MyType;
import mta.th10.bacsigiadinh.interfaces.IGroupItem;

public class NhomBenh implements IGroupItem {
	private int id;
	private String ten;
	
	public NhomBenh() {}

	public NhomBenh(int id, String ten) {
		super();
		this.id = id;
		this.ten = ten;
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public String getTen() {
		return ten;
	}

	public void setTen(String ten) {
		this.ten = ten;
	}

	@Override
	public String getTitle() {
		return getTen();
	}

	@Override
	public MyType getType() {
		return MyType.NhomBenh;
	}
	
	
}
