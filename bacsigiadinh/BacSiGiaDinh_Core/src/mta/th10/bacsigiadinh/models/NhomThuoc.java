/**
 *	http://thuoc.vn/Default.aspx?Mod=ClassifyDrugs&ClassifyID=298
 */

package mta.th10.bacsigiadinh.models;

import mta.th10.bacsigiadinh.enums.MyType;
import mta.th10.bacsigiadinh.interfaces.IGroupItem;

public class NhomThuoc implements IGroupItem {
	private String id;
	private String tenNhomThuoc;	
	private String parentId;
	private String url;
	private int soTrang;
	
	public NhomThuoc() {
	}
	
	public NhomThuoc(String id, String tenNhomThuoc, String parentId) {
		super();
		this.id = id;
		this.tenNhomThuoc = tenNhomThuoc;
		this.parentId = parentId;
	}
	public String getId() {
		return id;
	}
	public void setId(String id) {
		this.id = id;
	}
	public String getTenNhomThuoc() {
		return tenNhomThuoc;
	}
	public void setTenNhomThuoc(String tenNhomThuoc) {
		this.tenNhomThuoc = tenNhomThuoc;
	}
	public String getParentId() {
		return parentId;
	}
	public void setParentId(String parentId) {
		this.parentId = parentId;
	}

	@Override
	public String getTitle() {
		return getTenNhomThuoc();
	}

	@Override
	public MyType getType() {
		return MyType.NhomThuoc;
	}

	public String getUrl() {
		return url;
	}

	public void setUrl(String url) {
		this.url = url;
	}

	public int getSoTrang() {
		return soTrang;
	}

	public void setSoTrang(int soTrang) {
		this.soTrang = soTrang;
	}
	
	
	
}
