package mta.th10.bacsigiadinh.models;

import mta.th10.bacsigiadinh.enums.MyType;
import mta.th10.bacsigiadinh.interfaces.IGroupItem;

public class Benh extends MyBaseItem implements IGroupItem {
	private String id;
	private String ten;
	private int id_nhomBenh;
	private String content;
	
	public Benh() {	}
	public Benh(String ten, int id_nhomBenh, String content) {
		super();
		this.ten = ten;
		this.id_nhomBenh = id_nhomBenh;
		this.content = content;
	}
	
	
	public void setId(String id) {
		this.id = id;
	}
	
	public String getId() {
		return id;
	}

	
	public String getTen() {
		return ten;
	}
	public void setTen(String ten) {
		this.ten = ten;
	}
	public int getId_nhomBenh() {
		return id_nhomBenh;
	}
	public void setId_nhomBenh(int id_nhomBenh) {
		this.id_nhomBenh = id_nhomBenh;
	}
	public String getContent() {
		return content;
	}
	public void setContent(String content) {
		this.content = content;
	}
	@Override
	public String getTitle() {
		return getTen();
	}
	
	@Override
	public MyType getType() {
		return MyType.Benh;
	}
	
	
}
